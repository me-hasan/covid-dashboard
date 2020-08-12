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
$_apiResponseRawData = file_get_contents("http://103.247.238.92/webportal/api/get_corona_data.php");
$_apiResponseData = json_decode($_apiResponseRawData, true);
#print_r($_apiResponseData);	exit;

function en2bnbyXLSX($_enText){
	if(!@$_SESSION['translate']){
		$_filePath = 'SimpleXLSX.php';
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
	
	return (@$_SESSION['translate'][$_enText])?$_SESSION['translate'][$_enText]:$_enText;
}					
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
	<!--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>-->
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
				<?php
					if($_REQUEST['datatype'] == "riskzone"){
						
						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' => 'https://arcg.is/1iqf0T');
						
					}elseif($_REQUEST['datatype'] == "patientmobility"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://covid19mobility.cramstack.com/');

					} else if($_REQUEST['datatype'] == "citizenmobility"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://covid19mobility.cramstack.com/');

					} else if($_REQUEST['datatype'] == "synnoptic_surveillance"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'http://a2i-monitoring.sigmind.ai/home');

					} else if($_REQUEST['datatype'] == "ss_report"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'http://cdr.a2i.gov.bd/outlier_new/');

					} else if($_REQUEST['datatype'] == "sdp_monitoring"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'http://a2i-monitoring.sigmind.ai/home');

					} else if($_REQUEST['datatype'] == "analytics"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://app.powerbi.com/view?r=eyJrIjoiNmU2YWEwNTEtZWIwMC00M2Q2LTg5NzItMDI1YjEwNzM5NTNmIiwidCI6ImNkNTc1NTI0LTkyNTgtNGVkOC05NDg3LWUxYTIyN2JlMjkyYiIsImMiOjEwfQ%3D%3D&pageName=ReportSection96ba617637500cdc7529');
						
					} else if($_REQUEST['datatype'] == "detailsmap"){

						$_requestedFrameData = array('width' => '100%', 'height' => '820', 'URL' =>'https://app.powerbi.com/view?r=eyJrIjoiNmU2YWEwNTEtZWIwMC00M2Q2LTg5NzItMDI1YjEwNzM5NTNmIiwidCI6ImNkNTc1NTI0LTkyNTgtNGVkOC05NDg3LWUxYTIyN2JlMjkyYiIsImMiOjEwfQ%3D%3D&pageName=ReportSection96ba617637500cdc7529');
						
					}
				?>				
				<?php if(count($_requestedFrameData) > 0){?>
				
					<iframe width="<?php echo $_requestedFrameData['width']; ?>" height="<?php echo $_requestedFrameData['height']; ?>" src="<?php echo $_requestedFrameData['URL']; ?>" frameborder="0" allowFullScreen="true"></iframe>
					
				<?php } else { ?>
				
					<h2>Sorry, no content found. Please try again or contact with webmaster.</h2>
					
				<?php } ?>
				
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
<!-- container-scroller -->
<!--jQuery-->
<script src="assets/vendors/jquery/jquery.min.js"></script>
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
