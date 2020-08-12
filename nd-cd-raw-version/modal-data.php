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

$_modalType = $_POST['modal_type'];

$_extendedQuery = NULL;

/*if($_divisionName == "all")
	unset($_divisionName);

if($_divisionName){
	$_extendedQuery = " AND DIM_NAME='".$_divisionName."'";
}
if($_mapDate && $_mapDate != NULL){
	$_extendedQuery .= " AND DY_KEY='".str_replace('-', '', $_mapDate)."'";
}elseif($_mapDate == NULL){
	$_extendedQuery .= " GROUP BY `DISTRICT`";
}*/

$_chartType = NULL;
if($_modalType == 'daily_infected'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'INFECTED_24HR'";
	$_chartType = 'bar';
}else if($_modalType == 'daily_recovered'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'RECOVERED_24HR'";
	$_chartType = 'line';
}else if($_modalType == 'daily_death'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'DEATH_24HR'";
	$_chartType = 'line';
}else if($_modalType == 'daily_test'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'TEST_24HR'";
	$_chartType = 'line';
}else if($_modalType == 'total_infected'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'INFECTED_TOTAL'";
	$_chartType = 'bar';
}else if($_modalType == 'total_recovered'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'RECOVERED_TOTAL'";
	$_chartType = 'line';
}else if($_modalType == 'total_dead'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'DEATH_TOTAL'";
	$_chartType = 'line';
}else if($_modalType == 'total_test'){
	$_modalChartSQL = "select REPORT_DY, SYS_DT AS 'CURRENT_DATE', KPI_NAME, KPI_VAL from dwa_covid19_dash_summ_test where DASH_COMP_ID = 1 and KPI_NAME = 'TEST_TOTAL'";
	$_chartType = 'both';
}

$_modalChartRes = mysqli_query($conn, $_modalChartSQL);
$_modalChartData = array();

while($_queryResData = mysqli_fetch_array($_modalChartRes)){
	$_modalChartData['chart_type'] = $_chartType;
	if($_chartType == 'bar'){
		$_modalChartData['bar_chart'][] = array(en2bnbyXLSX(date('dM', strtotime($_queryResData['CURRENT_DATE']))), (int)$_queryResData['KPI_VAL']);
	}else if($_chartType == 'line'){
		$_modalChartData['line_chart_data'][] = (int)$_queryResData['KPI_VAL'];
		$_modalChartData['line_chart_label'][] = en2bnbyXLSX(date('dM', strtotime($_queryResData['CURRENT_DATE'])));
	}elseif($_chartType == 'both'){
		$_modalChartData['bar_chart'][] = array(en2bnbyXLSX(date('dM', strtotime($_queryResData['CURRENT_DATE']))), (int)$_queryResData['KPI_VAL']);
		$_modalChartData['line_chart_data'][] = (int)$_queryResData['KPI_VAL'];
		$_modalChartData['line_chart_label'][] = en2bnbyXLSX(date('dM', strtotime($_queryResData['CURRENT_DATE'])));
	
	}
}

if($_divisionName){

}

echo json_encode($_modalChartData);

?>