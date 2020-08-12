<?php
session_start();
include_once './app/etc/conn.php';


// checking session is valid for not 
if (strlen(@$_SESSION['id']) == 0){
	header('location:logout.php');
}else{
	// for deleting user
	if(isset($_SESSION['id']))
	{
		$adminid = $_SESSION['id'];
		
		$_SQL = "SELECT * FROM `admin_user` WHERE `id`='$adminid'";
		$ret = mysqli_query($conn, $_SQL);
		$_resultData = mysqli_fetch_array($ret);
		#print_r($num); exit;
		if(count($_resultData) > 0)
		{
			$_adminData = $_resultData;
		}
	}
}


$_filePath = 'SimpleXLSX.php';
require_once $_filePath;

function en2bnbyXLSX($_enText){
	if(!@$_SESSION['translate']){
		
		$_translateData = NULL;
		if ($xlsx = SimpleXLSX::parse('translate.xlsx')){
			foreach($xlsx->rows() as $_rowData){
				$_translateData[$_rowData[0]] = $_rowData[1]; 
			}
		}
		$_SESSION['translate'] = $_translateData;
	}
	
	return (@$_SESSION['translate'][$_enText])?$_SESSION['translate'][$_enText]:$_enText;
}

function getUpazillaList(){
	$_translateData = NULL;
	if ($xlsx = SimpleXLSX::parse('upazilla.xlsx')){
		#print_r($xlsx->rows());exit;
		foreach($xlsx->rows() as $_rowData){
			$_translateData[] = array($_rowData[1], $_rowData[2], $_rowData[0]);
		}
	}
	#print_r($_translateData);exit;
	return $_translateData;
}

$_divisionSelName = $_districtSelName = $_upazillaSelName = NULL;
if(count($_POST)){
	$_divisionSelName = $_POST['division'];
	$_districtSelName = $_POST['district'];
	$_upazillaSelName = $_POST['upazilla'];
}

// 8 Cards Data Query
$_apiResponseRawData = file_get_contents("http://103.247.238.92/webportal/api/get_corona_data.php");
$_apiResponseData = json_decode($_apiResponseRawData, true);
#print_r($_apiResponseData);	exit;

/*if(count($_apiResponseData) > 0){
	$_covidImpData['INFECTED_24HR'] = $_apiResponseData['infected_24_hrs'];
	$_covidImpData['RECOVERED_24HR'] = $_apiResponseData['recovered_24_hrs'];
	$_covidImpData['DEATH_24HR'] = $_apiResponseData['death_24_hrs'];
	$_covidImpData['TEST_24HR'] = $_apiResponseData['test_24_hrs'];
	$_covidImpData['INFECTED_TOTAL'] = $_apiResponseData['infected_total'];
	$_covidImpData['RECOVERED_TOTAL'] = $_apiResponseData['recovered_total'];
	$_covidImpData['DEATH_TOTAL'] = $_apiResponseData['death_total'];
	$_covidImpData['TEST_TOTAL'] = $_apiResponseData['test_total'];
}else{*/
	$_COVID19SQL = "select REPORT_DY, SYS_DT, KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and REPORT_DY = (select max(REPORT_DY) from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1)";
	$covidRes = mysqli_query($conn, $_COVID19SQL);
	$_covidImpData = array(); 
	while($_resultData = mysqli_fetch_array($covidRes)){ 
		$_covidImpData[$_resultData['KPI_NAME']] = $_resultData['KPI_VAL'];
		#print_r($_resultData);
	}
//}

// Last Day Compare Data
$_COVID19YesSQL = "select REPORT_DY, SYS_DT, KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and REPORT_DY = subdate(current_date(),3)";
$covidYesRes = mysqli_query($conn, $_COVID19YesSQL);
$_covidYesData = array(); 
while($_resultYesData = mysqli_fetch_array($covidYesRes)){ 
	$_covidYesData[$_resultYesData['KPI_NAME']] = $_resultYesData['KPI_VAL'];
}

// Get All Division List

$_getDivisionSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP CONFIRMED' from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES' GROUP BY `DISTRICT` ORDER BY `DATE`";
$_getDivisionRes = mysqli_query($conn, $_getDivisionSQL);
$_allDivisionList = array(); 
while($_divQueryData = mysqli_fetch_array($_getDivisionRes)){
	if($_divQueryData['DIVISION'] == NULL) continue; // SKIP Empty Row
	#print_r($_divQueryData); exit;
	$_allDivisionList[$_divQueryData['DIVISION']] = ($_mapDataDistrictWiseInfectedRes[$_divQueryData['DIVISION']])?$_mapDataDistrictWiseInfectedRes[$_divQueryData['DIVISION']]+$_divQueryData['INFECTED_PERSON']:$_divQueryData['INFECTED_PERSON'];

}
			
// District Wise Map Data
$_extendedQuery = NULL;

if($_divisionSelName == "all")
	unset($_divisionSelName);

if($_divisionSelName){
	$_extendedQuery = " AND DIM_NAME='".$_divisionSelName."'";
}
/*if($_mapDate && $_mapDate != NULL){
	$_extendedQuery .= " AND DY_KEY='".str_replace('-', '', $_mapDate)."'";
}elseif($_mapDate == NULL){
	$_extendedQuery .= " GROUP BY `DISTRICT`";
}*/

if($_extendedQuery){
	$_districtWiseInfectedSQL = "SELECT distinct T1.DATE AS 'DATE', T1.DIVISION, T1.DISTRICT, T1.INFECTED_PERSON, T1.GROUP_CONFIRMED, T2.Rt, T3.DOUBLING_RATE FROM
		(select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP_CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') and DY_KEY >='20200624') AS T1
		INNER JOIN
		(SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'Rt' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'Rt')) AS T2 USING (DISTRICT)
		INNER JOIN
		(SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'DOUBLING_RATE' from dwa_covid19_dash_summ_test 
		WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'DOUBLING_RATE'".$_extendedQuery.")) AS T3 USING (DISTRICT) GROUP BY `DISTRICT` ORDER BY DATE DESC, `INFECTED_PERSON` DESC";
		#echo $_districtWiseInfectedSQL; exit;
	//$_districtWiseInfectedSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED PERSON', SUB_DIM_NAME_2 AS 'GROUP CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE')".$_extendedQuery." GROUP BY `DISTRICT` ORDER BY `DATE`";
	
	//$_districtWiseInfectedSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS `DIVISION`, SUB_DIM_NAME AS `DISTRICT`, KPI_VAL AS `INFECTED PERSON`, SUB_DIM_NAME_2 AS `GROUP CONFIRMED` from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES'".$_extendedQuery." ORDER BY `DATE` DESC, `INFECTED PERSON` DESC";
}else{
	
	$_districtWiseInfectedSQL = "SELECT distinct T1.DATE AS 'DATE', T1.DIVISION, T1.DISTRICT, T1.INFECTED_PERSON, T1.GROUP_CONFIRMED, T2.Rt, T3.DOUBLING_RATE FROM
		(select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED_PERSON', SUB_DIM_NAME_2 AS 'GROUP_CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') and DY_KEY >='20200624') AS T1
		INNER JOIN
		(SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'Rt' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'Rt')) AS T2 USING (DISTRICT)
		INNER JOIN
		(SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'DOUBLING_RATE' from dwa_covid19_dash_summ_test 
		WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 = 'DOUBLING_RATE')) AS T3 USING (DISTRICT) GROUP BY DISTRICT ORDER BY DATE DESC, `INFECTED_PERSON` DESC";
	//$_districtWiseInfectedSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED PERSON', SUB_DIM_NAME_2 AS 'GROUP CONFIRMED' from dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt') AND (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') GROUP BY `DISTRICT` ORDER BY `DATE`";
}
/*$_districtWiseInfectedSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'DISTRICT', KPI_VAL AS 'INFECTED PERSON', SUB_DIM_NAME_2 AS 'GROUP CONFIRMED' from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES' GROUP BY `DISTRICT` ORDER BY `DATE`";*/
$_districtWiseInfectedRes = mysqli_query($conn, $_districtWiseInfectedSQL);
$_mapDataDistrictWiseInfectedRes = $_mapDataGroupList = $_districtList = $_distirctDetailsData = array(); 
while($_disWiseInfResultData = mysqli_fetch_array($_districtWiseInfectedRes)){
	$_distirctDetailsData[] = $_disWiseInfResultData; // This data will use for DataTable
	#print_r($_disWiseInfResultData); exit;
	$_mapDataDistrictWiseInfectedRes[$_disWiseInfResultData['DIVISION']] = ($_mapDataDistrictWiseInfectedRes[$_disWiseInfResultData['DIVISION']])?$_mapDataDistrictWiseInfectedRes[$_disWiseInfResultData['DIVISION']]+$_disWiseInfResultData['INFECTED_PERSON']:$_disWiseInfResultData['INFECTED_PERSON'];
	$_dataGroupParts = explode("-", $_disWiseInfResultData['GROUP_CONFIRMED']);
	$_dataGroupKey = (count($_dataGroupParts) > 1)?$_dataGroupParts[1]:str_replace('+', '', $_dataGroupParts[0])+100000;
	$_mapDataGroupList[$_dataGroupKey] = BanglaConverter::en2bn($_disWiseInfResultData['GROUP_CONFIRMED']);
	$_districtList[$_disWiseInfResultData['DISTRICT']] = array( 'division' => $_disWiseInfResultData['DIVISION'], 'district' => $_disWiseInfResultData['DISTRICT'], 'infected' => $_disWiseInfResultData['INFECTED_PERSON']); // Prepare District List
}
ksort($_mapDataGroupList);

#echo "<pre>";
#print_r($_mapDataGroupList);
#print_r($_districtList);
#print_r($_mapDataDistrictWiseInfectedRes);
//exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>National Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css"/>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
	<link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <!-- End layout styles -->
    <!--<link rel="shortcut icon" href="assets/images/favicon.png" />-->
	<!-- Custom Style -->
	<link rel="stylesheet" href="assets/css/custom.css"/>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo text-primary" href="dashboard.php"><h4>জাতীয় ড্যাশবোর্ড</h4></a>
            <a class="navbar-brand brand-logo-mini text-primary" href="dashboard.php"><h3>ND</h3></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-left">
                <li class="nav-item dropdown language-dropdown d-none d-sm-flex align-items-center">
                    <a class="nav-link d-flex align-items-center dropdown-toggle pl-0" id="LanguageDropdown" href="#" data-toggle="dropdown"  aria-expanded="false">
                        <div class="d-inline-flex mr-3"></div>
                        <span class="profile-text font-weight-normal">বাংলা</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
                        <a class="dropdown-item"> English </a>
                        <a class="dropdown-item"> বাংলা </a>
                    </div>
                </li>
            </ul>
            <div class="search-field d-none d-md-block">
                <form class="d-flex align-items-center h-100" action="#">
                    <div class="input-group">
                        <div class="input-group-prepend bg-transparent">
                            <i class="input-group-text border-0 mdi mdi-magnify"></i>
                        </div>
                        <input type="text" class="form-control bg-transparent border-0" placeholder="Search..."/>
                    </div>
                </form>
            </div>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="assets/images/faces/face1.jpg" alt="image"/>
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black"><?php echo ($_adminData['first_name'])?$_adminData['first_name'].' '.$_adminData['last_name']:''; ?></p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="logout.php"><i class="mdi mdi-logout mr-2 text-primary"></i>Signout</a>
                    </div>
                </li>

                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="logout.php">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
					<div class="col-lg-12">
                        <div class="main-filter-area mb-3">
                            <div class="d-flex">
                                <form action="" method="post" class="row">
									<div class="dropdown mr-1">
										<select class="btn btn-sm btn-custom dropdown-toggle" name="division" id="division_list">
											<option value="all">সব বিভাগ</option>
											<?php foreach($_allDivisionList as $_divisionName => $_infByDivision){?>
												<option class="division-option" value="<?php echo $_divisionName; ?>"<?php if($_divisionSelName == $_divisionName){?> selected="selected"<?php }?>><?php echo en2bnbyXLSX($_divisionName); ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="dropdown mr-1">
										<select class="btn btn-sm btn-custom dropdown-toggle" name="district" id="district_list">
											<option value="all">জেলা</option>
											<?php foreach($_districtList as $_districtName => $_districtInfo){ #$_divisionName = array_keys($_districtInfo)[0];?>
												<option class="district-option" value="<?php echo $_districtName; ?>" rel="<?php echo $_districtInfo['division']; ?>"<?php if($_districtSelName == $_districtName){?> selected="selected"<?php }?>><?php echo en2bnbyXLSX($_districtName); ?></option>
											<?php } ?>
										</select>
									</div>
									<div class="dropdown mr-1">
										<select class="btn btn-sm btn-custom dropdown-toggle" name="upazilla" id="upazilla_list">
											<option value="all">উপজেলা</option>
											<?php 
												$_upazillaList = getUpazillaList();
												foreach($_upazillaList as $_indexKey => $_upazillaInfo){?>
												<option class="upazilla-option" value="<?php echo $_upazillaInfo[0]; ?>" rel="<?php echo $_upazillaInfo[2]; ?>"<?php if($_upazillaSelName == $_upazillaInfo[0]){?> selected="selected"<?php }?>><?php echo $_upazillaInfo[1]; ?></option>
											<?php } ?>
										</select>
									</div>
									<button class="btn btn-primary btn-sm" type="submit"><i class="mdi mdi-map-search menu-icon"></i> অনুসন্ধান</button>
								</form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-row mb-3 box-wrapper">
                            <div class="info-box mt-2 mr-2 mb-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('আক্রান্তঃ দৈনিক পরিবর্তন', 'daily_infected', 'আক্রান্তের সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">আক্রান্ত (২৪ ঘন্টায়)</h4>
                                <div class="num-style">
                                    <spam id="last_infected"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['INFECTED_24HR'])); ?></spam>
                                    <span class="text-danger"><i class="mdi mdi-arrow-<?php echo ($_covidImpData['INFECTED_24HR'] > $_covidYesData['INFECTED_24HR'])?'up':'down';?>-circle menu-icon"></i></span>
                                </div>
                            </div>
                            <div class="info-box m-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('সুস্থঃ দৈনিক পরিবর্তন', 'daily_recovered', 'সুস্থতার সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">
                                    <!--গত ২৪ ঘন্টায় --><!--নতুন -->সুস্থ (২৪ ঘন্টায়)
                                </h4>
                                <div class="num-style">
                                    <span id="last_recovered"> <?php echo BanglaConverter::en2bn(number_format($_covidImpData['RECOVERED_24HR'])); ?></span>
                                    <span class="text-success"><i class="mdi mdi-arrow-<?php echo ($_covidImpData['RECOVERED_24HR'] > $_covidYesData['RECOVERED_24HR'])?'up':'down';?>-circle menu-icon"></i></span>
                                </div>
                            </div>
                            <div class="info-box m-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মৃত্যুঃ দৈনিক পরিবর্তন', 'daily_death', 'মৃত্যুর সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">
                                    <!--গত ২৪ ঘন্টায় --><!--নতুন-->মৃত্যু (২৪ ঘন্টায়)
                                </h4>
                                <div class="num-style">
                                    <span id="last_dead"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['DEATH_24HR'])); ?></span>
                                    <span class="text-danger"><i class="mdi mdi-arrow-<?php echo ($_covidImpData['DEATH_24HR'] > $_covidYesData['DEATH_24HR'])?'up':'down';?>-circle menu-icon"></i></span>
                                </div>
                            </div>
                            <div class="info-box m-2" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('পরীক্ষাঃ দৈনিক পরিবর্তন', 'daily_test', 'পরীক্ষার সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">
                                    <!--গত ২৪ ঘন্টায় --><!--নতুন -->পরীক্ষা<!--কৃত নমুনা সংখ্যা-->
                                    <!--সংখ্যা-->(২৪ ঘন্টায়)
                                </h4>
                                <div class="num-style">
                                    <span id="last_test"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['TEST_24HR'])); ?></span>
                                    <span class="text-success"><i class="mdi mdi-arrow-<?php echo ($_covidImpData['DEATH_24HR'] > $_covidYesData['DEATH_24HR'])?'up':'down';?>-circle menu-icon"></i></span>
                                </div>
                            </div>
                            <div class="info-box line-chart-1 m-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট আক্রান্তঃ দৈনিক পরিবর্তন', 'total_infected', 'মোট আক্রান্তর সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">মোট আক্রান্ত</h4>
                                <div class="num-style" id="total_infected"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['INFECTED_TOTAL'])); ?></div>
                            </div>
                            <div class="info-box line-chart-2 m-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট সুস্থঃ দৈনিক পরিবর্তন', 'total_recovered', 'মোট আক্রান্তর সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">মোট সুস্থ</h4>
                                <div class="num-style text-success" id="total_recovered"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['RECOVERED_TOTAL'])); ?></div>
                            </div>
                            <div class="info-box line-chart-3 m-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট মৃত্যুঃ দৈনিক পরিবর্তন', 'total_dead', 'মোট মৃত্যুর সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">মোট মৃত্যু</h4>
                                <div class="num-style text-danger" id="total_dead"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['DEATH_TOTAL'])); ?></div>
                            </div>
                            <div class="info-box line-chart-4 mt-2 ml-2 mb-2" style="position: relative;" data-toggle="modal" data-target="#modalContainer" title="বিস্তারিত দেখতে ক্লিক করুন" onClick="modalContent('মোট পরীক্ষাঃ দৈনিক পরিবর্তন', 'total_test', 'মোট পরীক্ষার সংখ্যা', 'তারিখ');">
                                <h4 class="card-title">মোট পরীক্ষা<!--কৃত নমুনা সংখ্যা--></h4>
                                <div class="num-style" id="total_test"><?php echo BanglaConverter::en2bn(number_format($_covidImpData['TEST_TOTAL'])); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header">
                                <div class="float-right">
                                    <div class="division-dd-wrapper">
                                        <div class="d-flex">
                                            <input type="text" name="from_date" value="03/08/2020" placeholder="তারিখ নির্বাচন করুন" />
											-
											<input type="text" name="to_date" value="<?php echo date("m/d/Y", strtotime('-1 day')) ?>" placeholder="তারিখ নির্বাচন করুন" />
											<!--<label for="divisionList" class="p-0 mr-2 mt-1">বিভাগ</label>
                                            <select class="form-control form-control-sm" id="divisionList" onchange="districtAjaxCall(this.value);">
                                                <option value="all">সব বিভাগ</option>
                                                <?php foreach($_mapDataDistrictWiseInfectedRes as $_divisionName => $_infByDivision){?>
                                                    <option value="<?php echo $_divisionName; ?>"><?php echo en2bnbyXLSX($_divisionName); ?></option>
                                                <?php } ?>
                                            </select>-->
                                        </div>
                                    </div>
                                </div>
                                সারা দেশ</h5>
                            <div class="card-body p-0 daily-charge">
                                <!--<ul class="nav nav-tabs justify-content-end mtm" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> বিভাগ</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">জেলা</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"> উপজেলা</a>
                                    </li>
                                </ul>-->
                                <div class="row">
                                    <div class="col-lg-7">
										<div class="row">
											<div class="col-lg-5">
												<div class="py-1" style="text-align: center;">
													<a class="float-right btn btn-link" href="dataframe.php?datatype=detailsmap">বিস্তারিত</a>
													<?php if($_divisionSelName){ ?>
														<div id="map-container"></div>
													<?php } else { ?>
													<img src="assets/images/covid-19-bangladesh-map.png" alt="Covid-19" width="250" />
													<img src="assets/images/bangladesh-map.png" alt="Covid-19" width="300" height="100" style="padding-bottom:20px;" />
													<div id="map-container" style="display: none;"></div>
													<?php } ?>
												</div>
											</div>
                                    <div class="col-lg-7">
                                        <table class="table  mt-4 mb-3 table-bordered table-striped small table-sm" id="district-infecteed">
                                            <thead>
												<tr>
													<th scope="col"><strong>বিভাগ</strong></th>
													<th scope="col"><strong>জেলা</strong></th>
													<th scope="col"><strong>আক্রান্ত</strong></th>
													<th scope="col"><strong>Rt সংখ্যা</strong></th>
													<th scope="col"><strong>ডাবলিং টাইম</strong></th>
													<th scope="col"><strong>দৈনিক পরিবর্তন (১৪ দিন)</strong></th>
												</tr>
                                            </thead>
                                        </table>
										<!--<table class="table  mt-1 mb-3 table-bordered table-striped small table-sm" id="ajaxres-infecteed"></table>-->
                                    </div>
                                </div>
								</div>
                                    <div class="col-lg-5">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <!--<div class="progress mb-2">
                                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>-->
                                                <div id="division"></div>
											</div>
                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <div id="district"></div>
                                            </div>
                                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                <div id="upozilla"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!-- <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header">সার্বিক পরিস্থিতির মানচিত্র  <a style="float:right;" href="map-details.php" target="_blank">বিস্তারিত</a></h5>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>-->
                </div>
                <div class="row">
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header">হাসপাতাল শয্যা বনাম ভর্তি</h5>
                            <div class="card-body">
                                <div id="bedvsaddmitted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header color-transparent">Zone wise data</h5>
                            <div class="card-body p-0 daily-charge">
                                <ul class="nav nav-tabs mtm" id="myTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active"
                                           id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true"><h5><span class="text-danger">রেড জোন</span></h5>
                                        </a
                                        >
                                    </li>
                                    
									<li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false"><h5>
                                            <span class="text-warning">ইয়েলো জোন</span>
                                        </h5></a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false"><h5>
                                            <span class="text-success">গ্রিন জোন</span>
                                        </h5></a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTab1Content">
                                    <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <?php
												$_redZoneSQL = "SELECT T1.ZONE_AREA, T1.DOUBLING_RATE, T2.Rt, T3.TEST_POSITIVITY, T4.CASES_PER_1M_POPULATION
													FROM (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE', KPI_VAL AS 'DOUBLING_RATE'
													FROM dwa_covid19_dash_summ_test WHERE SUB_DIM_NAME_2 = 'Doubling_Rate' AND KPI_NAME = 'TABULAR_DATA') AS T1
													INNER JOIN (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE',KPI_VAL AS 'Rt' FROM dwa_covid19_dash_summ_test
													WHERE SUB_DIM_NAME_2 = 'Rt' AND KPI_NAME = 'TABULAR_DATA') AS T2 using (ZONE_AREA)
													INNER JOIN (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE',KPI_VAL AS 'TEST_POSITIVITY'
													FROM dwa_covid19_dash_summ_test WHERE SUB_DIM_NAME_2 = 'TEST_POSITIVITY' AND KPI_NAME = 'TABULAR_DATA') AS T3 using(ZONE_AREA)
													INNER JOIN (select DIM_NAME as 'ZONE_AREA', SUB_DIM_NAME AS 'ZONE',KPI_VAL AS 'CASES_PER_1M_POPULATION'
													FROM dwa_covid19_dash_summ_test WHERE SUB_DIM_NAME_2 = 'CASES_PER_100000_POPULATION' AND KPI_NAME = 'TABULAR_DATA') AS T4 using(ZONE_AREA) ORDER BY CASES_PER_1M_POPULATION DESC";
												$_redZoneRes = mysqli_query($conn, $_redZoneSQL);
												?>
												<table class="table table-bordered table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"></th>
                                                        <th scope="col">আক্রান্ত /<br/>১০ লাখে</th>
                                                        <th scope="col">ডাবলিং<br/> রেট</th>
                                                        <th scope="col">Rt<br/>সংখ্যা</th>
                                                        <th scope="col">টেস্ট <br/>পজিটিভিটি</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php
													$_arrayData = array();
													while($_queryResData = mysqli_fetch_array($_redZoneRes)){
														if(in_array($_queryResData['ZONE_AREA'], $_arrayData)){
															continue;
														}
														$_arrayData[$_queryResData['ZONE_AREA']] = $_queryResData['ZONE_AREA'];
													?>
													<tr>
                                                        <th scope="row"><?php echo en2bnbyXLSX($_queryResData['ZONE_AREA']); ?></th>
                                                        <td><?php echo BanglaConverter::en2bn(number_format($_queryResData['CASES_PER_1M_POPULATION'])); ?></td>
                                                        <td><?php echo BanglaConverter::en2bn(number_format($_queryResData['DOUBLING_RATE'])); ?></td>
                                                        <td><?php echo BanglaConverter::en2bn($_queryResData['Rt']); ?></td>
                                                        <td><?php echo BanglaConverter::en2bn(number_format($_queryResData['TEST_POSITIVITY'])); ?></td>
                                                    </tr>
													<?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="redzone"></div>
                                                <div class="info-area">
                                                    <div class="py-2">
														হোম আইসোলেশন মেনে চলছে
                                                        <span class="px-2 text-success"><strong>৫০%</strong></span>
                                                    </div>
                                                    <div class="py-2">
														সামাজিক দূরত্ব বজায় রাখছে
                                                        <span class="px-2 text-success"><strong>৪৬%</strong></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header">বিভাগভিত্তিক গুরুত্বপূর্ণ সূচকের(KPI) সাপ্তাহিক পরিবর্তন</h5>
                            <div class="card-body daily-charge">
                                <div class="division-dd-wrapper top-dropdown">
                                    <div class="d-flex">
										<label for="staticEmail" class="p-0 mr-2 mt-1">বিভাগ</label>
                                        <select class="form-control form-control-sm" id="staticEmail">
                                            <option>ঢাকা</option>
                                            <option>চট্টগ্রাম</option>
                                            <option>খুলনা</option>
                                            <option>বরিশাল</option>
                                            <option>রাজশাহী</option>
                                        </select>
                                    </div>

                                </div>
                                <table class="table table-sm table-bordered header-bg-color">
                                    <thead>
                                    <tr>
                                        <th scope="col"><strong>গুরুত্বপূর্ণ সূচক(KPI)</strong></th>
                                        <th scope="col"><strong>বর্তমান সপ্তাহ</strong></th>
                                        <th scope="col"><strong>গত সপ্তাহ</strong></th>
                                        <th scope="col"><strong>% পরিবর্তন</strong></th>
                                        <th scope="col"><strong>সাপ্তাহিক প্রবাহ</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">সর্বমোট নমুনা সংগ্রহ</th>
                                        <td><?php BanglaConverter::en2bn('1,012');?></td>
                                        <td>1,398</td>
                                        <td class="bg-success">138,14%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-1.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">আক্রান্তের %</th>
                                        <td>7,718</td>
                                        <td>8,901</td>
                                        <td class="bg-success">115.33%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">সর্বমোট পরীক্ষাগারের সংখ্যা</th>
                                        <td>10,633</td>
                                        <td>18,714</td>
                                        <td class="bg-success">176.00%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">সর্বমোট পরীক্ষা উপকরণ</th>
                                        <td>10,633</td>
                                        <td>18,714</td>
                                        <td class="bg-success">176.00%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">হোম আইসোলেশন</th>
                                        <td>10,633</td>
                                        <td>18,714</td>
                                        <td class="bg-success">176.00%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">পরীক্ষার জন্য গড় অপেক্ষা</th>
                                        <td></td>
                                        <td>1</td>
                                        <td class="bg-danger">Infinity</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-3.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">পরীক্ষার ফলাফল লাভের জন্য গড় অপেক্ষা</th>
                                        <td>1,211</td>
                                        <td>743</td>
                                        <td class="bg-success">61.35%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">প্রতি ১০ লক্ষে পরীক্ষা সংখ্যা</th>
                                        <td>257</td>
                                        <td>162</td>
                                        <td class="bg-success">61.35%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">প্রতি ১০ লক্ষে আক্রান্ত</th>
                                        <td>257</td>
                                        <td>162</td>
                                        <td class="bg-success">61.35%</td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>
                                    <!--<tr>
                                        <th scope="row">TOTAL</th>
                                        <td class="bg-secondary"><strong>35, 283</strong></td>
                                        <td class="bg-secondary"><strong>45,907</strong></td>
                                        <td class="bg-secondary"><strong>130,11%</strong></td>
                                        <td><span class="line-chart-holder"><img src="assets/images/line-chart-2.png"> </span>
                                        </td>
                                    </tr>-->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header">বিভাগীয় অন্তর্গমন ও বহির্গমনের শতকরা হার</h5>
                            <div class="card-body p-0 daily-charge">
                                <ul class="nav nav-tabs justify-content-end mtm"
                                    id="myTab3"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab33" data-toggle="tab" href="#home33" role="tab" aria-controls="home33" aria-selected="true"> অন্তর্গমন </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab33" data-toggle="tab" href="#profile33" role="tab" aria-controls="profile33" aria-selected="false">বহির্গমন</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent3">
                                    <div class="tab-pane fade show active text-center" id="home33" role="tabpanel" aria-labelledby="home-tab33">
                                        <div id="division-in-continer"></div>
                                    </div>
                                    <div class="tab-pane fade text-center" id="profile33" role="tabpanel" aria-labelledby="profile-tab33">
                                        <div id="division-out-continer"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 grid-margin stretch-card">
                        <div class="card">
                            <h5 class="card-header">বিভাগীয় জনসংখ্যার ভিত্তিতে শতকরা আক্রান্তের হার</h5>
                            <div class="card-body p-0 daily-charge">
                                <ul class="nav nav-tabs justify-content-end mtm "
                                    id="myTab2"
                                    role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true"> শীর্ষস্থানীয় শহর</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">বিভাগ</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false"> জেলা</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab22" data-toggle="tab" href="#contact22" role="tab" aria-controls="contact22" aria-selected="false"> উপজেলা</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade show active text-center"
                                         id="home2"
                                         role="tabpanel"
                                         aria-labelledby="home-tab2">
										 <div id="chartContainer"></div>
                                    </div>
                                    <div class="tab-pane fade  text-center"
                                         id="profile2"
                                         role="tabpanel"
                                         aria-labelledby="profile-tab2">
                                        <img src="assets/images/top-city.png">
                                    </div>
                                    <div class="tab-pane fade  text-center"
                                         id="contact2"
                                         role="tabpanel"
                                         aria-labelledby="contact-tab2">
                                        <img src="assets/images/top-city.png">
                                    </div>
                                    <div class="tab-pane fade  text-center"
                                         id="contact22"
                                         role="tabpanel"
                                         aria-labelledby="contact-tab22">
                                        <img src="assets/images/top-city.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020
              </span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- Modal Start -->
<div class="modal fade" id="modalContainer" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalLabel"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" id="modalContent">
				<div class="row">
					<div class="col-md-6 grid-margin stretch-card" id="modalContentLeft"></div>
					<div class="col-md-6 grid-margin stretch-card" id="modalContentRight"></div>
				</div>
				<div id="modal-loading" style="text-align:center;">Loading...</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Ends -->
<!-- container-scroller -->
<!--jQuery-->
<script src="assets/vendors/jquery/jquery.min.js"></script>
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<!--<script src="assets/js/hoverable-collapse.js"></script>-->
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<!--<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>-->
<!-- End custom js for this page -->

<!-- Fututionchart Integration -->
<!-- Step 1 - Include the fusioncharts core library -->
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<!-- Step 2 - Include the fusion theme -->
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<!-- Fututionchart Integration -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	<?php
		$_colorCode = array( '10' => '#FCAA94', '50' => '#F69475', '100' => '#F37366', '150' => '#E5515D', '1000' => '#CD3E52', 'high' => '#BC2B4C');
		$_groupDataColor = array();
		foreach($_mapDataGroupList as $dataGroupKeyVal => $dataGroupName){
			if($dataGroupName == 'Doubling_Rate') continue; // Error Handling
			$_groupDataColor[] = array('maxvalue' => $dataGroupKeyVal, 'displayvalue' => $dataGroupName, 'code' => ($dataGroupKeyVal > 1000)?$_colorCode['high']:$_colorCode[$dataGroupKeyVal]);
		}
		
		$_divisionCode = array('RANGPUR' => 'BD.RP', 'RAJSHAHI' => 'BD.RS', 'MYMENSINGH' => 'BD.MM', 'SYLHET' => 'BD.SY', 'DHAKA' => 'BD.DA', 'KHULNA' => 'BD.KH', 'BARISHAL' => 'BD.BA', 'BARISAL' => 'BD.BA', 'CHATTOGRAM' => 'BD.CG');
		
		$_divisionDistrictCode = array(
		'RANGPUR' => array('DINAJPUR' => 'BD.RP.DJ', 'GAIBANDHA' => 'BD.RP.GB', 'KURIGRAM' => 'BD.RP.KR', 'LALMONIRHAT' => 'BD.RP.LL', 'NILPHAMARI' => 'BD.RP.NP', 'PANCHAGARH' => 'BD.RP.PN', 'RANGPUR' => 'BD.RP.RP', 'THAKURGAON' => 'BD.RP.TH'),
		'RAJSHAHI' => array('BOGRA' => 'BD.RS.BO', 'JOYPURHAT' => 'BD.RS.JP', 'NAOGAON' => 'BD.RS.NA', 'NATORE' => 'BD.RS.NT', 'CHAPAINAWABGANJ' => 'BD.RS.NW', 'CHAPAI NAWABGANJ' => 'BD.RS.NW', 'NOWABGANJ' => 'BD.RS.NW', 'NAWABGANJ' => 'BD.RS.NW', 'PABNA' => 'BD.RS.PB', 'RAJSHAHI' => 'BD.RS.RS', 'SIRAJGANJ' => 'BD.RS.SR'), 
		'MYMENSINGH' => array('JAMALPUR' => 'BD.MM.JM', 'MYMENSINGH' => 'BD.MM.MM', 'NETROKONA' => 'BD.MM.NK', 'SHERPUR' => 'BD.MM.SP'), 
		'SYLHET' => array('HABIGANJ' => 'BD.SY.HA', 'HOBIGANJ' => 'BD.SY.HA', 'MOULVIBAZAR' => 'BD.SY.MB', 'MOULVI BAZAR' => 'BD.SY.MB', 'SUNAMGANJ' => 'BD.SY.SN', 'SYLHET' => 'BD.SY.SL'), 
		'DHAKA' => array('DHAKA' => 'BD.DA.DH', 'FARIDPUR' => 'BD.DA.FR', 'GAZIPUR' => 'BD.DA.GZ', 'GOPALGANJ' => 'BD.DA.GG', 'KISHOREGANJ' => 'BD.DA.KS', 'MANIKGANJ' => 'BD.DA.MK', 'MUNSIGANJ' => 'BD.DA.MK', 'MUNSHIGANJ' => 'BD.DA.MU', 'NARAYANGANJ' => 'BD.DA.NY', 'NARSINGDHI' => 'BD.DA.NS', 'NARSINGDI' => 'BD.DA.NS', 'RAJBARY' => 'BD.DA.RB', 'RAJBARI' => 'BD.DA.RB', 'SARIATPUR' => 'BD.DA.SA', 'SHARIATPUR' => 'BD.DA.SA', 'TANGAIL' => 'BD.DA.TA', 'MADARIPUR' => 'BD.DA.MD'), 
		'KHULNA' => array('BAGERHAT' => 'BD.KH.BH', 'CHUADANGA' => 'BD.KH.CD', 'JESSORE' => 'BD.KH.JS', 'JHENAIDAH' => 'BD.KH.JN', 'KHULNA' => 'BD.KH.KL', 'KUSHTIA' => 'BD.KH.KU', 'MAGURA' => 'BD.KH.MG', 'MEHERPUR' => 'BD.KH.ME', 'NARAIL' => 'BD.KH.NR', 'SATKHIRA' => 'BD.KH.ST'), 
		'BARISAL' => array('BARGUNA' => 'BD.BA.BG', 'BARISAL' => 'BD.BA.BS', 'BHOLA' => 'BD.BA.BL', 'JHALOKATI' => 'BD.BA.JK', 'JHALAKATI' => 'BD.BA.JK', 'PATUAKHALI' => 'BD.BA.PT', 'PIROJPUR' => 'BD.BA.PR', 'PEROJPUR' => 'BD.BA.PR'), 
		'CHATTOGRAM' => array('BANDARBAN' => 'BD.CG.BD', 'BRAHAMANBARIA' => 'BD.CG.BB', 'BRAHMANBARIA' => 'BD.CG.BB', 'CHANDPUR' => 'BD.CG.CP', 'CHATTOGRAM' => 'BD.CG.CT', 'COMILLA' => 'BD.CG.CM', "COX'S BAZAR" => 'BD.CG.CB', 'FENI' => 'BD.CG.FN', 'KHAGRACHHARI' => 'BD.CG.KG', 'LAKSHMIPUR' => 'BD.CG.LK', 'NOAKHALI' => 'BD.CG.NO', 'RANGAMATI' => 'BD.CG.PC')
		);
		
		$_divisionWiseInfacted = array();
		#echo $_divisionSelName;
		if($_divisionSelName && $_divisionSelName != 'all'){
			#print_r($_districtList); exit;
			foreach($_districtList as $_districtName => $_districtInfo){ #print_r($_districtInfo);exit;
				#if($_divisionName == NULL) continue; // Error Handling
				$_divisionWiseInfacted[] = array('id' => $_divisionDistrictCode[$_districtInfo['division']][$_districtName], 'value' => $_districtInfo['infected'], 'showLabel' => '1');
			}
		}else{	
			foreach($_mapDataDistrictWiseInfectedRes as $_divisionName => $divisionInfected){ #print_r($_divisionName);exit;
				#if($_divisionName == NULL) continue; // Error Handling
				$_divisionWiseInfacted[] = array('id' => $_divisionCode[$_divisionName], 'value' => $divisionInfected);
			}
		}
		
		#print_r($_divisionWiseInfacted); exit;
		
		$_mapRegions = array(
			'all' => 'maps/bangladesh',
			'MYMENSINGH' => 'maps/mymensingh',
			'BARISAL' => 'maps/barisal',
			'RANGPUR' => 'maps/rangpur',
			'SYLHET' => 'maps/sylhet',
			'CHATTOGRAM' => 'maps/chittagong',
			'RAJSHAHI' => 'maps/rajshahi',
			'DHAKA' => 'maps/dhaka',
			'KHULNA' => 'maps/khulna'
		);
		
	?>
	const dataSource = {
	  chart: {
		caption: "",
		subcaption: "",
		legendposition: "BOTTOM",
		entitytooltext: "$lname: <b>$datavalue </b>আক্রান্ত",
		legendcaption: "সংক্রমনের সংখ্যা ভিত্তিক তথ্য",
		entityfillhovercolor: "#FFCDD2",
		theme: "fusion"
	  },
	  colorrange: {
		gradient: "0",
		color: <?php echo json_encode($_groupDataColor);?>
	  },
	  data: [
		{
		  data: <?php echo json_encode($_divisionWiseInfacted);?>
		}
	  ]
	};

	FusionCharts.ready(function() {
	  var myChart = new FusionCharts({
		type: <?php echo ($_divisionSelName)?"'".$_mapRegions[$_divisionSelName]."'":"'maps/bangladesh'"; ?>,
		renderAt: "map-container",
		width: "320",
		height: "400",
		dataFormat: "json",
		dataSource
	  }).render();
	});
</script>
<style type="text/css">
svg text[font-size="9px"]{display:none !important;} /* Remove Trail Version*/
.dataTables_length{display: none;}
</style>
<script type="text/javascript">
$(document).ready(function() {
	$('#division_list').change(function(){
		/*if($('#district_list').val() != null){
			$('#district_list').val("");
		}
		if($('#upazilla_list').val() != null){
			$('#upazilla_list').val("");
		}*/
		if($(this).val() == 'all'){
			$('.district-option').show();
		}else{
			//console.log($(this).val());
			$('.district-option').hide();
			$('option[rel="'+$(this).val()+'"]').show();
		}
	});
	
	$('#district_list').change(function(){
		console.log($(this).val());
		/*if($('#division_list').val() != null){
			$('#division_list').val("");
		}
		if($('#upazilla_list').val() != null){
			$('#upazilla_list').val("");
		}*/
		
		if($(this).val() == 'all'){
			$('.upazilla-option').show();
		}else{
			//console.log($(this).val());
			$('.upazilla-option').hide();
			$('option[rel="'+$(this).val()+'"]').show();
		}
	});
	
	<?php if($_divisionSelName) {?>
		$('.district-option').hide();
		$('option[rel="<?php echo $_districtSelName;?>"]').show();
	<?php } ?>
	
	<?php if($_districtSelName) {?>
		$('.upazilla-option').hide();
		$('option[rel="<?php echo $_divisionSelName;?>"]').show();
	<?php } ?>
	
	<?php $_imageLineChart = array('line-chart-1.png', 'line-chart-2.png', 'line-chart-3.png', 'line-chart-4.png');?>
	<?php foreach($_distirctDetailsData as $_districtWiseInfo){
			$_dataTableDataSet[] = array(en2bnbyXLSX($_districtWiseInfo['DIVISION']), en2bnbyXLSX($_districtWiseInfo['DISTRICT']), BanglaConverter::en2bn(number_format($_districtWiseInfo['INFECTED_PERSON'])), BanglaConverter::en2bn($_districtWiseInfo['Rt']), BanglaConverter::en2bn(number_format($_districtWiseInfo['DOUBLING_RATE'])), '<span class="line-chart-holder"><img src="assets/images/'.$_imageLineChart[rand(0, 3)].'"> </span>');
		} 
	?>
    var districtDataTable = $('#district-infecteed').DataTable({
        data: <?php echo json_encode($_dataTableDataSet); ?>,
        columns: [
			{ title: "বিভাগ" },
			{ title: "জেলা" },
			{ title: "আক্রান্ত" },
			{ title: "Rt সংখ্যা" },
			{ title: "ডাবলিং টাইম" },
			{ title: "দৈনিক পরিবর্তন (১৪ দিন)" }
		],
		//"ajax": "district-infected.php",
		//bPaginate: false,
		bFilter: false, 
		bInfo: false,
		"ordering": false
		//pagingType: "simple_numbers"
    });
	//$.fn.DataTable.ext.pager.numbers_length = 3;

});
	
// Map Dropdown List
function districtAjaxCall(division_name){
	
	var divisionObj = {
		'all': 'maps/bangladesh',
		'MYMENSINGH': 'maps/mymensingh',
		'BARISAL': 'maps/barisal',
		'RANGPUR': 'maps/rangpur',
		'SYLHET': 'maps/sylhet',
		'CHATTOGRAM': 'maps/chittagong',
		'RAJSHAHI': 'maps/rajshahi',
		'DHAKA': 'maps/dhaka',
		'KHULNA': 'maps/khulna'
		
	};
	
	console.log(divisionObj[division_name]);
	
	divisionMap = divisionObj[division_name];
	
	/*Object.keys(divisionObj).forEach(function eachKey(key) {
		
		console.log(key); // alerts key 
		console.log(divisionObj[key]); // alerts value
	});*/
	
	//$('.submit-btn').html('LOADING...').attr('style','background-color:#3b3b3b');	
		 
	var formParams = "division_name="+division_name+"&map_date="+$('#map_date').val()+"&isAjax=true";
  
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	 var responseData = JSON.parse(this.responseText);
	 //alert(responseData.data);
	if(responseData.data){
		 
		 if(division_name == 'all'){
			responseData.division_group_color_data = <?php echo json_encode($_groupDataColor);?>;
			responseData.division_wise_inffacted_data = <?php echo json_encode($_divisionWiseInfacted);?>;
		 }
		 
		//$('#district-infecteed_wrapper').hide();
		if ($.fn.dataTable.isDataTable( '#district-infecteed' ) ) {
			districtDataTable = $('#district-infecteed').DataTable();
			districtDataTable.destroy();
		}		
		districtDataTable = $('#district-infecteed').DataTable( {
			data: responseData.data,
			//bPaginate: false,
			bFilter: false, 
			bInfo: false,
			"ordering": false,
			columns: [
				{ title: "বিভাগ" },
				{ title: "জেলা" },
				{ title: "আক্রান্ত" },
				{ title: "Rt সংখ্যা" },
				{ title: "ডাবলিং টাইম" },
				{ title: "দৈনিক পরিবর্তন (১৪ দিন)" }
			]
		});
		
		//alert(responseData.division_group_color_data);
		const dataSource = {
		  chart: {
			caption: "",
			subcaption: "",
			legendposition: "BOTTOM",
			entitytooltext: "$lname: <b>$datavalue </b>আক্রান্ত",
			legendcaption: "সংক্রমনের সংখ্যা ভিত্তিক তথ্য",
			entityfillhovercolor: "#FFCDD2",
			theme: "fusion"
		  },
		  colorrange: {
			gradient: "0",
			color: responseData.division_group_color_data
		  },
		  data: [
			{
			  data: responseData.division_wise_inffacted_data
			}
		  ]
		};

		FusionCharts.ready(function() {
		  var myChart = new FusionCharts({
			type: divisionMap,
			renderAt: "map-container",
			width: "320",
			height: "400",
			dataFormat: "json",
			dataSource
		  }).render();
		});
	 }
	}
  };
  xhttp.open("POST", "district-infected.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");		  
  xhttp.send(formParams);
}
</script>
<!-- Daily Infected & Forcast Graph -->
<script type="text/javascript">
<?php
$_outputDailyData = $_InfectedDailyData = $_forcastDailyInfectedData = $_infectedWeekDays = $_forcastWeekDays = $_lastDay = array();
$_cr = 0;

if($_divisionSelName){
	$_dailyInfectedSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', SUM(KPI_VAL) AS 'CUMULATIVE_COUNT', DIM_NAME AS 'DIVISION' FROM dwa_covid19_dash_summ_test WHERE (KPI_NAME='MAP_OF_CASES' AND SUB_DIM_NAME_2 <> 'Rt' AND SUB_DIM_NAME_2 <> 'DOUBLING_RATE') AND DIM_NAME = '".$_divisionSelName."' GROUP BY DY_KEY";
}else {
	$_dailyInfectedSQL = "select str_to_date(REPORT_DY, '%Y%m%d') AS 'DATE', KPI_VAL AS 'CUMULATIVE_COUNT' FROM dwa_covid19_dash_summ_test
WHERE KPI_NAME = 'DAILY_CHANGES' AND DIM_NAME = 'ACTUAL'";
}
//$_dailyInfectedSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, KPI_VAL AS INFECTED_PERSON from dwa_covid19_dash_summ_test where REPORT_DY <= curdate() and DIM_NAME='CURR_VAL'";
$_dailyInfectedRes = mysqli_query($conn, $_dailyInfectedSQL);
while($_queryResData = mysqli_fetch_array($_dailyInfectedRes)){ 
	$_InfectedDailyData[$_queryResData['DATE']] = $_queryResData['CUMULATIVE_COUNT'];
	if($_cr%7 == 0){
		$_lableTextParts = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_queryResData['DATE'])));
		$_lableTextParts[0] = BanglaConverter::en2bn($_lableTextParts[0]);
		$_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
		#print_r($_lableTextParts); exit;
		$_infectedWeekDays[$_queryResData['DATE']] = implode("",$_lableTextParts);
	}
	 $_infLastDay = $_queryResData['DATE'];
	$_cr++;
}
#echo count($_infectedWeekDays);
if($_InfectedDailyData[$_infLastDay]){
	$_lableTextParts = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_infLastDay)));
	$_lableTextParts[0] = BanglaConverter::en2bn($_lableTextParts[0]);
	$_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
	#print_r($_lableTextParts); exit;
	$_infectedWeekDays[$_infLastDay] = implode("",$_lableTextParts);	
}

$_infectedWeeksDate = array_keys($_infectedWeekDays); // For Forcasting Data Maping

/*echo count($_infectedWeekDays);
print_r($_infectedWeekDays);
echo $_infLastDay;
print_r($_infectedDateData);
exit;*/

if($_divisionSelName){
	$_forcastDailySQL = "SELECT str_to_date(DY_KEY,'%Y%m%d') AS 'DATE', KPI_VAL AS 'CUMULATIVE_COUNT', DIM_NAME AS 'DIVISION' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'DIV_DAILY_CHANGES' AND DIM_NAME = '".$_divisionSelName."'";
}else {
	$_forcastDailySQL = "select str_to_date(REPORT_DY, '%Y%m%d') AS 'DATE', KPI_VAL AS 'CUMULATIVE_COUNT' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'DAILY_CHANGES' AND DIM_NAME = 'PREDICTION'";
}
//$_forcastDailySQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, KPI_VAL AS INFECTED_PERSON from dwa_covid19_dash_summ_test where DIM_NAME='FORECAST_VAL'";
$_forcastDailyRes = mysqli_query($conn, $_forcastDailySQL);
$_cr = 0;
while($_queryResData = mysqli_fetch_array($_forcastDailyRes)){ 
	$_forcastDailyInfectedData[$_queryResData['DATE']] = $_queryResData['CUMULATIVE_COUNT'];
	if(in_array($_queryResData['DATE'], $_infectedWeeksDate) || (($_cr%7 == 0) && (strtotime($_queryResData['DATE']) > strtotime($_infLastDay)))){
		$_lableTextParts = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_queryResData['DATE'])));
		$_lableTextParts[0] = BanglaConverter::en2bn($_lableTextParts[0]);
		$_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
		$_forcastWeekDays[$_queryResData['DATE']] = implode("",$_lableTextParts);
	}
	$_lastDay = $_queryResData['DATE'];
	$_cr++;
	#print_r($_queryResData);
}

$_totalDataCount = count($_InfectedDailyData)+count($_forcastDailyInfectedData);

$_lableTextParts = preg_split('/(?<=[0-9])(?=[a-z]+)/i', date('dM', strtotime($_lastDay)));
$_lableTextParts[0] = BanglaConverter::en2bn($_lableTextParts[0]);
$_lableTextParts[1] = en2bnbyXLSX($_lableTextParts[1]);
$_lastDayData = array($_lastDay => implode("", $_lableTextParts));

$_xAxisData = array_merge($_infectedWeekDays, $_forcastWeekDays, $_lastDayData);
$_xAxisData = array_values($_xAxisData);

#print_r($_forcastWeekDays);exit;


foreach($_infectedWeekDays as $_infactedWeekDaysKey => $_infactedWeekDaysVal){
	$_infectedWeeksData[] = (int)$_InfectedDailyData[$_infactedWeekDaysKey];
}
//$_infectedWeeksData[] = (int)$_InfectedDailyData[$_infLastDay]; // Used before

foreach($_forcastWeekDays as $_forcastKeyDate => $_forcastVal){
	if(!in_array($_forcastKeyDate, $_infectedWeeksDate)){
		$_infectedWeeksData[] = NULL;
	}
}

#print_r($_forcastDailyInfectedData);
/*echo count($_xAxisData)."--";
echo count($_infectedWeeksData);
exit;*/


$_forcastWeeksDate = array_keys($_forcastWeekDays); // For Forcasting Data Maping

foreach($_infectedWeeksData as $_infectedKey => $_infectedVal){
	//if($_infectedVal == NULL) continue;	
	$_forcastDailyData[$_infectedKey] = NULL;
	//$_forcastDailyData[] = ($_infectedKey % 2 == 0)?$_infectedVal+rand(($_infectedVal/15)-200, ($_infectedVal/15)):$_infectedVal-rand(($_infectedVal/20)-200, ($_infectedVal/20));
}

$_totalInfecRecords = (int)count($_infectedWeeksData);
$_rc = (int)count($_forcastWeekDays);
#print_r($_forcastDailyData);
#$_forcastWeekDaysReverse = array_reverse($_forcastWeekDays);
foreach($_forcastWeekDays as $_forcastWeekKey => $_forcastVal){
	$_forcastDailyData[$_totalInfecRecords-$_rc] = (int)$_forcastDailyInfectedData[$_forcastWeekKey];
	$_rc--;
}
//$_forcastDailyData[] = (int)$_forcastDailyInfectedData[$_lastDay]

#$_totalWeek = rand($_totalData/7);exit;

#echo count($_forcastDailyData);
#print_r($_forcastDailyData);exit;
?>

// Highcharts Infected and Forcast Chart
Highcharts.chart('division', {
	title: {
        text: 'দৈনিক পরিবর্তন ও পূর্বাভাস'
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: <?php echo json_encode($_xAxisData);?>
    },
	
	yAxis: {
        title: {
            text: ''
        }/*,
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15*/
    },
	
	plotOptions: {
        series: {
            fillOpacity:0/*,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }*/
        }
    },
	
	colors: ["#00008b", "#e08658"],
	series: [{
		name: 'সংক্রামিত',
		data: <?php echo json_encode($_infectedWeeksData, true);?>,
		type : 'area',
		marker:{symbol:'circle'}
		
		}, {
			name: 'ফোরকাস্ট',
			data: <?php echo json_encode($_forcastDailyData, true);?>,
			type: 'area', 
			marker : {symbol : 'circle'},
			dashStyle: 'shortdot'
		}],
});

</script>
<script type="text/javascript">
<?php
$_redZoneData = $_xAxisData = array();
$_week = 1;

$_redZoneSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS 'WEEK DATE', DIM_NAME AS ZONE, KPI_VAL AS 'NO OF ZONE' from dwa_covid19_dash_summ_test WHERE KPI_NAME='ZONE' AND DIM_NAME='RED'";
$_redZoneRes = mysqli_query($conn, $_redZoneSQL);
while($_queryResData = mysqli_fetch_array($_redZoneRes)){ 
	$_redZoneData[] = (int)$_queryResData['NO OF ZONE'];
	$_xAxisData[] = "W".$_week;
	$_week++;
}

#print_r($_xAxisData);exit;
?>

// Highcharts Infected and Forcast Chart
Highcharts.chart('redzone', {
	title: {
        text: 'সাপ্তাহিক রেড জোন',
		align: 'left'
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'bottom'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: <?php echo json_encode($_xAxisData);?>
    },
	
	yAxis: {
        title: {
            text: ''
        }/*,
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		}*/
    },
	
	plotOptions: {
        series: {
            //fillOpacity:0,
			dataLabels:{
                enabled:false
            }
        }
    },	
	colors: ['#ff0000'],
	series: [{
		name: 'রেড জোনের সংখ্যা',
		data: <?php echo json_encode($_redZoneData);?>,
		marker:{symbol:'circle'}		
		}]
});

</script>
<script type="text/javascript">
<?php 
$_mobilitySQL = "SELECT DIM_NAME AS 'DIVISION', SUB_DIM_NAME AS 'MOBILITY_TYPE', SUB_DIM_NAME_2 AS 'WEEK', KPI_VAL*100 AS 'PERCENTAGE(%)' FROM dwa_covid19_dash_summ_test WHERE KPI_NAME = 'MOBILITY_RATE'";
$_mobilityRes = mysqli_query($conn, $_mobilitySQL);
$_mobilityData = $_mobilityWeeks = $_mobilityInWeeklyData = $_mobilityOutWeeklyData = array();
while($_queryResData = mysqli_fetch_array($_mobilityRes)){  	
	$_mobilityData[$_queryResData['MOBILITY_TYPE']][$_queryResData['DIVISION']][$_queryResData['WEEK']] = $_queryResData['PERCENTAGE(%)'];
	if(!in_array($_queryResData['WEEK'], $_mobilityWeeks)){
		$_mobilityWeeks[] = $_queryResData['WEEK'];
	}
}
asort($_mobilityWeeks);
$_mobilityWeeks = array_values($_mobilityWeeks);

foreach($_mobilityData as $_mobilityType => $_mobilityTypeData){
	foreach($_mobilityTypeData as  $_orgMobilityDivision => $_orgMobilityData){
		ksort($_orgMobilityData);
		$_mobilityDivisionWeeksData = array_values(array_map('intval', $_orgMobilityData));
		#print_r($_mobilityDivisionWeeksData); exit;
		if($_mobilityType == "IN"){
			//(round($_mobilityValue) != $_mobilityValue)?round($_mobilityValue):$_mobilityValue;
			$_mobilityInWeeklyData[] = array('type' => 'area', 'name' => en2bnbyXLSX(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
		}else if($_mobilityType == "OUT"){
			$_mobilityOutWeeklyData[] = array('type' => 'area', 'name' => en2bnbyXLSX(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
		}
	}
}
#print_r($_mobilityInWeeklyData);
#print_r($_mobilityOutWeeklyData);
#exit;
?>
// Mobility In Chart
Highcharts.chart('division-in-continer', {
	title: {
        text: ''
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'top'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: <?php echo json_encode($_mobilityWeeks);?>
    },
	
	yAxis: {
        title: {
            text: ''
        },
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15
    },
	
	plotOptions: {
        series: {
            fillOpacity:0,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }
        }
    },
	
	colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],
	
    series: <?php echo json_encode($_mobilityInWeeklyData);?>
});
// Mobility Out Chart
Highcharts.chart('division-out-continer', {
	title: {
        text: ''
    },

    subtitle: {
        text: ''
    },
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'top'
    },
	
	credits:{
		enabled:false
	},
	
	xAxis: {
		categories: <?php echo json_encode($_mobilityWeeks);?>
    },
	
	yAxis: {
        title: {
            text: ''
        },
		labels: {
			formatter: function() {
			   return this.value+"%";
			}
		},
		max: 15
    },
	
	plotOptions: {
        series: {
            fillOpacity:0,
			dataLabels:{
                enabled:true,
                color: 'black',
                formatter:function() {
                    //var pcnt = (this.y / dataSum) * 100;
                    return Highcharts.numberFormat(this.y) + '%';
                }
            }
        }
    },
	
	colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],
	
    series: <?php echo json_encode($_mobilityOutWeeklyData);?>
});
</script>
<script type="text/javascript">
<?php
$_hospitalBedSQL = "select DIM_NAME as 'DIVISION', KPI_NAME as 'FACILITY', SUB_DIM_NAME as 'TYPE', KPI_VAL as 'COUNT' from dwa_covid19_dash_summ_test where DASH_COMP_ID = 4";
$_hospitalBedRes = mysqli_query($conn, $_hospitalBedSQL);
$_hospitalBedData = $_divisionList = array();
while($_queryResData = mysqli_fetch_array($_hospitalBedRes)){
	#print_r($_queryResData);exit;
	$_hospitalBedData[$_queryResData['DIVISION']][$_queryResData['FACILITY']][$_queryResData['TYPE']] = $_queryResData['COUNT'];
	if(!in_array($_queryResData['DIVISION'], $_divisionList)){
		$_divisionList[] = $_queryResData['DIVISION'];
	}
}

foreach($_hospitalBedData as $_hosBedDivision => $_hosBedDivisionData){
	foreach($_hosBedDivisionData as  $_hosBedFacility => $_hosBedFacilityData){
		//ksort($_orgMobilityData);
		//$_mobilityDivisionWeeksData = array_values(array_map('intval', $_orgMobilityData));
		#echo $_hosBedFacility;
		#print_r($_hosBedDivisionData); exit;
		if($_mobilityType == "IN"){
			//(round($_mobilityValue) != $_mobilityValue)?round($_mobilityValue):$_mobilityValue;
			$_mobilityInWeeklyData[] = array('type' => 'area', 'name' => en2bnbyXLSX(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
		}else if($_mobilityType == "OUT"){
			$_mobilityOutWeeklyData[] = array('type' => 'area', 'name' => en2bnbyXLSX(strtoupper($_orgMobilityDivision)), 'data' => $_mobilityDivisionWeeksData, 'marker' => array('symbol' => 'circle'));
		}
	}
}
?>
Highcharts.chart('bedvsaddmitted', {
	title: {
        text: ''
    },

    subtitle: {
        text: ''
    },
	
	credits:{
		enabled:false
	},
	
	legend: {
        layout: 'horizontal',
        align: 'center',
        verticalAlign: 'top'
    },
    "chart": {
      "height": "450",
      "type": "bar"
    },
    "yAxis": {
      "title": {
        "text": ""
      }
    },

    "xAxis": {
       categories: ["ঢাকা", "চট্টগ্রাম", "রাজশাহী", "খুলনা", "বরিশাল", "সিলেট", "রংপুর", "ময়মনসিংহ"]
    },
	
	//colors: ['#444a9f', '#843984', '#399de9', '#e08658', '#cbc434', '#7c6faf', '#843984', '#ca5aa9'],

    "series": [{
	  "name": "সাধারণ বেড",
      "data": [2477, 1500,500,600, 650,800,900,1000],
      "stack": "0"
    }, {
	 "name": "আইসোলেশন বেড",
      "data": [300, 200,500,600, 650,800,900,1000],
      "stack": "1"
    }, {
	 "name": "আই সি ইউ বেড ",
      "data": [200, 20,50,60, 100,150,200,200],
      "stack": "2"
    }, {
	 "name": "হাই ফ্লো অক্সিজেন বেড",
      "data": [100, 200,500,600, 650,800,900,1000],
      "stack": "3"
    }, {
	 "name": "ভর্তি",
      "data": [1900, 250,100,150, 100,200,140,250],
      "stack": "0"
    }, {
	 "name": "আইসোলেশন বেড ভর্তি",
      "data": [100, 250,100,150, 100,200,140,250],
      "stack": "1"
    }],
    "plotOptions": {
      "bar": {
        "stacking": "normal"

      }
    }
  });
</script>

<script type="text/javascript">
/*Highcharts.setOptions({
    colors: ['#01BAF2', '#71BF45', '#FAA74B']
});*/
Highcharts.chart('chartContainer', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'জনসংখ্যা সাপেক্ষে শতকরা আক্রান্ত',
      y:10
    },
	credits:{
		enabled:false
	},
	legend:{
		enabled:false
	},
    tooltip: {
      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: true,
          formatter:function(){
            return this.key+ ': ' + this.y + '%';
          }
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'আক্রান্ত',
      colorByPoint: true,
      innerSize: '70%',
      data: [
	  {name: 'ঢাকা', y: 30,}, 
	  { name: 'চট্টগ্রাম', y: 20 }, 
	  { name: 'রাজশাহী', y: 15 },
	  { name: "খুলনা", y: 13 },
	  { name: "বরিশাল ", y: 3 },
	  { name: "সিলেট ", y: 7},
	  { name: "রংপুর ", y: 17, },
	  { name: "ময়মনসিংহ ", y: 22 }
	]
    }]
  });

// Modal Content Function
function modalContent(modalLabel, modalType, yAxisLabel, xAxisLabel){
	// Show Modal Lable
	$('#modalLabel').html(modalLabel);
	
	var width = 600;
	var height = 450;
	
	//AJAX
	var formParams = "modal_type="+modalType+"&isAjax=true";
  
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
	 var responseData = JSON.parse(this.responseText);
	 
	 	
	if(responseData.chart_type == 'bar'){
		
		var barChartDataSource = [{
			name: 'আক্রান্ত',
			data: responseData.bar_chart
		  }];
		var barModalContainer = 'modalContent';
		
	}else if(responseData.chart_type == 'line'){
		
		var lineChartDataSource = responseData.line_chart_data;
		var lineChartDataCategory = responseData.line_chart_label;
		var lineModalContainer = 'modalContent';
		
	}else if(responseData.chart_type == 'both'){
		
		var barChartDataSource = [{
			name: 'আক্রান্ত',
			data: responseData.bar_chart
		  }];
		var lineChartDataSource = responseData.line_chart_data;
		var lineChartDataCategory = responseData.line_chart_label;
		
		var barModalContainer = 'modalContentLeft';
		var lineModalContainer = 'modalContentRight';
		
		$('#modal-loading').remove();
	}
	
	 //alert(responseData.bar_chart);
	if(responseData.chart_type == 'bar' || responseData.chart_type == 'both'){
		 Highcharts.chart(barModalContainer, {
		  chart: {
			type: 'column',
			/*height: height,
			width: width*/
		  },
		  title: {
			text: ''
		  },
		  credits:{
		    enabled:false
		  },
		  subtitle: {
			text: ''
		  },
		  xAxis: {
			type: 'category',
			labels: {
			  rotation: -45,
			  style: {
				fontSize: '13px',
				fontFamily: '"SolaimanLipi", Arial, sans-serif'
			  }
			},
			title: {
			  text: xAxisLabel
			}
		  },
		  yAxis: {
			min: 0,
			title: {
			  text: yAxisLabel
			}
		  },
		  colors: ["#858796"],
		  legend: {
			enabled: false
		  },
		  series: barChartDataSource
		});
	 }
	 if(responseData.chart_type == 'line' || responseData.chart_type == 'both'){
		 Highcharts.chart(lineModalContainer, {
		  title: {
			text: ''
		  },
			credits:{
				enabled:false
			},
		  subtitle: {
			text: ''
		  },
		  xAxis: {
			type: 'category',
			labels: {
			  rotation: -45,
			  style: {
				fontSize: '13px',
				fontFamily: '"SolaimanLipi", Arial, sans-serif'
			  }
			},
			title: {
			  text: xAxisLabel
			},
			categories: lineChartDataCategory
		  },
		  yAxis: {
			//min: 0,
			title: {
			  text: yAxisLabel
			}
		  },
		  colors: ["#A5479B"],
		  legend: {
			enabled: false
		  },
		  series: [{
					name: yAxisLabel,
					data: lineChartDataSource
				}]
		});
	 }
	}
  };
  xhttp.open("POST", "modal-data.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");		  
  xhttp.send(formParams);
}

</script>
<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
<script type="text/javascript">
$('input[name="from_date"]').datepicker({
  minDate: new Date('2020-03-08')
});
$('input[name="to_date"]').datepicker({
  maxDate: new Date('<?php echo date('Y-m-d'); ?>')
});
</script>
</body>
</html>
