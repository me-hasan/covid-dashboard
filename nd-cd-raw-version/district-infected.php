<?php
session_start();

// checking session is valid for not 
if (strlen(@$_SESSION['id']) == 0){
	header('location:logout.php');
}

include_once("./app/etc/conn.php");

function en2bnbyXLSX($_enText){
	
	if($_SESSION['translate'] == NULL){
		$_filePath = str_replace('\app', '', __DIR__).'\SimpleXLSX.php';
		#echo $_filePath;
		require_once $_filePath;
		$_translateData = NULL;
		if ($xlsx = SimpleXLSX::parse('translate.xlsx')){
			foreach($xlsx->rows() as $_rowData){
				$_translateData[$_rowData[0]] = $_rowData[1]; 
			}
		}
		$_SESSION['translate'] = $_translateData;
	}
	#echo $_SESSION['translate'][$_enText];
	#print_r($xlsx->rows()); exit;
	
	return (@$_SESSION['translate'][$_enText])?$_SESSION['translate'][$_enText]:$_enText;
}

$_divisionName = $_POST['division_name'];
$_mapDate = $_POST['map_date'];

$_extendedQuery = NULL;

if($_divisionName == "all")
	unset($_divisionName);

if($_divisionName){
	$_extendedQuery = " AND DIM_NAME='".$_divisionName."'";
}
if($_mapDate && $_mapDate != NULL){
	$_extendedQuery .= " AND DY_KEY='".str_replace('-', '', $_mapDate)."'";
}elseif($_mapDate == NULL){
	$_extendedQuery .= " GROUP BY `DISTRICT`";
}

if($_extendedQuery){
	$_covid19MapSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS `DIVISION`, SUB_DIM_NAME AS `DISTRICT`, KPI_VAL AS `INFECTED PERSON`, SUB_DIM_NAME_2 AS `GROUP CONFIRMED` from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES'".$_extendedQuery." ORDER BY `DATE` DESC, `INFECTED PERSON` DESC";
	#echo $_covid19MapSQL;
}else{
	$_covid19MapSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS `DIVISION`, SUB_DIM_NAME AS `DISTRICT`, KPI_VAL AS `INFECTED PERSON`, SUB_DIM_NAME_2 AS `GROUP CONFIRMED` from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES' GROUP BY `DISTRICT` ORDER BY `DATE` DESC, `INFECTED PERSON` DESC";
}
#echo $_covid19MapSQL;
/*$_covid19MapSQL = "select str_to_date(DY_KEY,'%Y%m%d') AS DATE, DIM_NAME AS `DIVISION`, SUB_DIM_NAME AS `DISTRICT`, KPI_VAL AS `INFECTED PERSON`, SUB_DIM_NAME_2 AS `GROUP CONFIRMED` from dwa_covid19_dash_summ_test WHERE KPI_NAME='MAP_OF_CASES'";*/
$_covid19MapRes = mysqli_query($conn, $_covid19MapSQL);
$_covid19MapDisData = $_mapDataDistrictWiseInfectedRes = $_mapDataGroupList = array();
$_imageLineChart = array('line-chart-1.png', 'line-chart-2.png', 'line-chart-3.png', 'line-chart-4.png');
while($_covid19MapResData = mysqli_fetch_array($_covid19MapRes)){
	if(floor($_covid19MapResData['INFECTED PERSON']) != $_covid19MapResData['INFECTED PERSON']){
		continue;  // Error Handling
	}
	#print_r($_resultDisWiseInfectedData); exit;
	$_randomRtVal = rand(($_covid19MapResData['INFECTED PERSON']-($_covid19MapResData['INFECTED PERSON']-2)),$_covid19MapResData['INFECTED PERSON']);
	$_covid19MapDisData['data'][]/*[$_covid19MapResData['DATE']][$_covid19MapResData['DIVISION']][$_covid19MapResData['DISTRICT']]*/ = array(en2bnbyXLSX($_covid19MapResData['DIVISION']), en2bnbyXLSX($_covid19MapResData['DISTRICT']), BanglaConverter::en2bn(number_format($_covid19MapResData['INFECTED PERSON'])), BanglaConverter::en2bn(number_format($_randomRtVal)), BanglaConverter::en2bn(number_format($_randomRtVal)), '<span class="line-chart-holder"><img src="assets/images/'.$_imageLineChart[rand(0, 3)].'"> </span>');
	$_covid19MapDisData['divisional_data'][] = array(en2bnbyXLSX($_covid19MapResData['DISTRICT']), BanglaConverter::en2bn($_covid19MapResData['INFECTED PERSON']));
	
	// For Division Data
	if($_divisionName){
		@$_mapDataDistrictWiseInfectedRes[$_covid19MapResData['DISTRICT']] = /*BanglaConverter::en2bn((int)*/($_mapDataDistrictWiseInfectedRes[$_covid19MapResData['DISTRICT']])?$_mapDataDistrictWiseInfectedRes[$_covid19MapResData['DISTRICT']]+$_covid19MapResData['INFECTED PERSON']:$_covid19MapResData['INFECTED PERSON']/*)*/;
		$_dataGroupParts = explode("-", $_covid19MapResData['GROUP CONFIRMED']);
		$_dataGroupKey = /*BanglaConverter::en2bn((int)*/(count($_dataGroupParts) > 1)?$_dataGroupParts[1]:str_replace('+', '', $_dataGroupParts[0])+100000/*)*/;
		$_mapDataGroupList[$_dataGroupKey] = /*BanglaConverter::en2bn(*/$_covid19MapResData['GROUP CONFIRMED']/*)*/;
	}
}
if($_divisionName){
	ksort($_mapDataGroupList);
	/*print_r($_mapDataGroupList);
	print_r($_mapDataDistrictWiseInfectedRes);
	exit;*/

	$_colorCode = array('#FCAA94', "#F69475", "#F37366", "#E5515D", "#CD3E52", "#BC2B4C");
	$_groupDataColor = array();
	$i = 0;
	foreach($_mapDataGroupList as $dataGroupKeyVal => $dataGroupName){
		if($dataGroupName == 'Rt') continue; // Error Handling
		$_covid19MapDisData['division_group_color_data'][] = array('maxvalue' => $dataGroupKeyVal, 'displayvalue' => BanglaConverter::en2bn($dataGroupName), 'code' => $_colorCode[$i]);
		$i++;
	}
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
	foreach($_mapDataDistrictWiseInfectedRes as $_districtName => $districtInfected){
		if($_divisionDistrictCode[$_divisionName][$_districtName] == NULL) {
			//echo $_districtName."--".$_divisionName."--";
			continue;
		}
		if($_districtName == NULL) continue; // Error Handling
		$_covid19MapDisData['division_wise_inffacted_data'][] = array('id' => $_divisionDistrictCode[$_divisionName][$_districtName], 'value' => $districtInfected);
	}
}

echo json_encode($_covid19MapDisData);

?>