<?php
session_start();

error_reporting(0);
include_once("./app/etc/conn.php");

// Check if customer already login
if($_SESSION['id'] && $_SESSION['login']){
	$extra = "dashboard.php";
	echo "<script>window.location.href='".$extra."'</script>";
	exit();
}
if(isset($_POST['login']))
{
	#print_r($_POST);exit;
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, md5($_POST['password']));
	#echo $password; exit;
	$_loginSQL = "SELECT * FROM `admin_user` WHERE `username`='$username' and `password`='$password'";
	$ret = mysqli_query($conn, $_loginSQL);
	#echo $ret; exit;
	$num = mysqli_fetch_array($ret);
	#print_r($num); exit;
	if(count($num) > 0)
	{
		$extra = "dashboard.php";
		$_SESSION['login'] = $_POST['username'];
		$_SESSION['id'] = $num['id'];
		echo "<script>window.location.href='".$extra."'</script>";
		exit();
	}else{
		$_SESSION['action1'] = "*Invalid Username or Password";
		$extra = "index.php";
		echo "<script>window.location.href='".$extra."'</script>";
		exit();
	}
}
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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>National Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="./assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
	<link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" />
  </head>
  <body class="login-bg-wrapper">
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5 shadow-sm">
                <div class="brand-logo text-center text-primary mb-2">
                  <h1>জাতীয় ড্যাশবোর্ড</h1>
                </div>
                <h6 class="text-center mb-4">লগইনের জন্য আপনার আইডি এবং পাসওয়ার্ড লিখুন</h6>
				<?php if($_SESSION['message']){?>
					<p><?php echo en2bnbyXLSX($_SESSION['message']);?></p>
				<?php } ?>
                <form class="pt-3" action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ইউজার আইডি</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ইউজার আইডি" name="username" required>
                  </div>
                  <div class="form-group mb-1">
                    <label for="exampleInputPassword1">পাসওয়ার্ড</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="পাসওয়ার্ড" name="password" required>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> সাইন ইন রাখুন </label>
                    </div>
                    <a href="#" class="auth-link text-black">পাসওয়ার্ড ভুলে গেছেন?</a>
                  </div>
                  <button type="submit" class="btn btn-primary" name="login" >প্রবেশ</button>
                </form>
              </div>
              <p class="powered-by mt-5 mb-2 text-center">Powered by <img src="assets/images/egeneration.png" alt="egeneration-logo"></p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="./assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="./assets/js/off-canvas.js"></script>
    <script src="./assets/js/hoverable-collapse.js"></script>
    <script src="./assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>