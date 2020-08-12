<?php
// Turn off error reporting
error_reporting(0);

date_default_timezone_set('Asia/Dhaka');

// Define Variable
define('DEBUG_MODE', false);

if(DEBUG_MODE == true){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "national-dashboard";
						
}else{

	$servername = "localhost";
	$username = "bgy7ewu4_coronad";
	$password = "us(MA%!4~yH0";
	$dbname = "bgy7ewu4_corona_dashboard";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$_returnData = array();

// Check connection
if ($conn->connect_error) {
  $_returnData['ERROR'] = "Database connection failed.";// $conn->connect_error;
}

// English to Bangla Translator
class BanglaConverter {
    public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
    
    public static function bn2en($number) {
        return str_replace(self::$bn, self::$en, $number);
    }
    
    public static function en2bn($number) {
        return str_replace(self::$en, self::$bn, $number);
    }
}

// Gender
$_genderList = array('ML' => 'Male', 'FML' => 'Female', 'CMN' => 'Common');

// Blood Group
$_bloodGroupList = array("AP" => "A+", "AN" => "A-", "BP" => "B+", "BN" => "B-", "OP" => "O+", "ON" => "O-", "ABP" => "AB+", "ABN" => "AB-");

// Yes/No
$_translateData = array('Y' => 'Yes', 'N' => 'No');

// Allow Status
$_allowStatus = array('success' => 'Successful', 'complete' => 'Complete', 'not_interest' => 'Not interested', 'invalid' => 'Invalid', 'follow_up' => 'Follow-up', 'available' => 'Available', 'fail' => 'Failed', 'pending' => 'Pending', 'processing' => 'Processing', 'onhold' => 'On Hold', 'canceled' => 'Canceled', 'approved' => 'Approved', 'booked' => 'Booked', 'needtocall' => 'Need to Call', 'fraud' => 'Fraud');

// District List
$_districtList = array("Bagerhat", "Bandarban", "Barguna", "Barisal", "Brahmanbaria", "Bogra", "Chandpur", "Chittagong", "Chuadanga", "Comilla", "Coxs Bazar", "Dhaka", "Dinajpur", "Faridpur", "Feni", "Gaibandha", "Gazipur", "Gopalganj", "Habiganj", "Joypurhat", "Jamalpur", "Jessore", "Jhalokati", "Jhenaidah", "Khagrachhari", "Khulna", "Kishoreganj", "Kurigram", "Kushtia", "Lakshmipur", "Lalmonirhat", "Madaripur", "Magura", "Manikganj", "Meherpur", "Moulvibazar", "Munshiganj", "Mymensingh", "Naogaon", "Narayanganj", "Narsingdi", "Natore", "Chapai Nawabganj", "Netrakona", "Nilphamari", "Noakhali", "Narail", "Pabna", "Panchagarh", "Patuakhali", "Pirojpur", "Rajbari", "Rajshahi", "Rangamati", "Rangpur", "Satkhira", "Shariatpur", "Sherpur", "Sirajganj", "Sunamganj", "Sylhet", "Tangail", "Thakurgaon");

/**
 * Check if captcha is valid
 * @param  string $captchaResponse
 * @return boolean
 */
function isCaptchaValid($captchaResponse)
{
	$result = false;

	$params = array(
		'secret' => '6LcsigEVAAAAAG2wtOeHMZdEE6RwT8KlgbxhcCOa',
		'response' => $captchaResponse
	);

	$ch = curl_init('https://www.google.com/recaptcha/api/siteverify');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_TIMEOUT, 5);
	$requestResult = trim(curl_exec($ch));
	curl_close($ch);

	if (is_array(json_decode($requestResult, true))) {
		$response = json_decode($requestResult, true);

		if (isset($response['success']) && $response['success'] === true) {
			$result = true;
		}
	}

	return $result;
}
