<?php
// Excel File Parser
$_filePath = 'SimpleXLSX.php';
require_once $_filePath;

	
$_cardDataSet = $_nationwideSummaryDataSet = $_dataTableLabels = $_populationWiseCaseDataSet = $_genderWiseDeathDataSet = $_timeSeriesDataSet = $_genderWiseInfectDataSet = $_averageDelayTimeDataSet = NULL;

if ($xlsxDataSet = SimpleXLSX::parse('data-source/home-dashboard.xlsx')){

	$_fileSheetNames = $xlsxDataSet->sheetNames();
	
	#echo $xlsxDataSet->sheetName(0);
	#print_r($xlsxDataSet->sheetNames()); exit;
	
	// Card
	if(in_array("Card", $_fileSheetNames)){
		$_cardDataSet = $xlsxDataSet->rows(0);
	}
	$_lastCardDataSet = $_cardDataSet[count($_cardDataSet)-1];
	
	// Nationwide Summary Data
	if(in_array("Nationwide Summary Data", $_fileSheetNames)){
		$_nationwideSummaryDataSet = $xlsxDataSet->rows(1);
	}
	$_dataTableLabels = $_nationwideSummaryDataSet[0];
	
	// Population Wise Infected
	if(in_array("Population Wise Infected", $_fileSheetNames)){
		$_populationWiseCaseDataSet = $xlsxDataSet->rows(2);
	}
	$_populationWiseDataLabels = $_populationWiseCaseDataSet[0];
	#unset($_populationWiseCaseDataSet[0]);
	
	// Gender Wise Death Distribution
	if(in_array("Gender Wise Death Distribution", $_fileSheetNames)){
		$_genderWiseDeathDataSet = $xlsxDataSet->rows(3);
	}
	$_genderWiseDeathDataLabels = $_genderWiseDeathDataSet[0];
	
	// Gender Wise Infect Distribution
	if(in_array("Gender Wise Infect Distribution", $_fileSheetNames)){
		$_genderWiseInfectDataSet = $xlsxDataSet->rows(4);
	}
	$_genderWiseInfectDataLabels = $_genderWiseInfectDataSet[0];
	
	// Age Wise Death Distribution
	if(in_array("Age Wise Death Distribution", $_fileSheetNames)){
		$_ageWiseDeathDataSet = $xlsxDataSet->rows(5);
	}
	$_ageWiseDeathDataLabels = $_ageWiseDeathDataSet[0];
	
	// Age Wise Infected Distribution
	if(in_array("Age Wise Infected Distribution", $_fileSheetNames)){
		$_ageWiseInfectDataSet = $xlsxDataSet->rows(6);
	}
	$_ageWiseInfectDataLabels = $_ageWiseInfectDataSet[0];
	
	// Average Delay Time
	if(in_array("Average Delay Time", $_fileSheetNames)){
		$_averageDelayTimeDataSet = $xlsxDataSet->rows(7);
	}
	
	// Time Series
	if(in_array("Time Series", $_fileSheetNames)){
		$_timeSeriesDataSet = $xlsxDataSet->rows(8);
	}
	$_timeSeriesDataLabels = $_timeSeriesDataSet[0];
	unset($_timeSeriesDataSet[0]);
	
	
}
#print_r($_populationWiseCaseDataSet); 
#print_r($_lastCardDataSet); 
#exit;

$_divisionAllData = $_districtAllData = $_upazilaAllData = NULL;
if ($xlsx = SimpleXLSX::parse('data-source/upazila.xlsx')){
	#print_r($xlsx->rows());exit;
	foreach($xlsx->rows() as $_rowData){
		$_divisionAllData[$_rowData[0]] = $_rowData[0];
		$_districtAllData[$_rowData[1]] = array($_rowData[1], $_rowData[0]);
		$_upazilaAllData[$_rowData[2]] = array($_rowData[2], $_rowData[3], $_rowData[1]);
	}
}
#print_r($_districtAllData);exit;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

	<?php include_once 'head.php'; ?>
		
	</head>

	<body class="app sidebar-mini">

		<!---Global-loader-->
		<div id="global-loader" >
			<img src="assets/images/svgs/loader.svg" alt="loader">
		</div>
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">

				<!--aside open-->
				<aside class="app-sidebar">
					<?php include_once 'en-sidebar.php' ?>
				</aside>
				<!--aside closed-->

				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

						<!--app header-->
						<?php include_once 'header.php' ?>
						<!--/app header-->

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<!--<h4 class="page-title mb-0">Hi! Welcome Back</h4>-->
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
								</ol>
							</div>
							<!--<div class="page-rightheader">
								<div class="btn btn-list">
									<a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
									<a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
									<a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
								</div>
							</div>-->
						</div>
						<!--End Page header-->

						<!-- Row-1 -->
						<div class="row top-cards">
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Infected (24 hours)</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[1]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-warning"><?php echo round($_lastCardDataSet[2]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Total Infected</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[3]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-warning"><?php echo round($_lastCardDataSet[4]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Recoverd (24 hours)</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[5]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-success"><?php echo round($_lastCardDataSet[6]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1">Total Recoverd</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[7]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-success"><?php echo round($_lastCardDataSet[8]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Death (24 hours)</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[9]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-danger"><?php echo round($_lastCardDataSet[10]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1">Total Death</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[11]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-danger"><?php echo round($_lastCardDataSet[12]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1 ">Test (24 hours)</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[13]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-info"><?php echo round($_lastCardDataSet[14]); ?>%</span>
									</div>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card overflow-hidden dash1-card border-0">
									<div class="card-body">
										<p class=" mb-1">Total Test</p>
										<h4 class="mb-1 number-font"><?php echo number_format($_lastCardDataSet[15]); ?></h4>
										<small class="fs-12 text-muted">Compared to Last Day</small>
										<span class="ratio bg-success"><?php echo round($_lastCardDataSet[16]); ?>%</span>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-1 -->

						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Nationwide Summary Data</h3>
										<div class="card-options">
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
												<thead>
													<tr>
														<?php foreach($_dataTableLabels as $_tableHead):?>
														<th class="border-bottom-0"><?php echo $_tableHead; ?></th>
														<?php endforeach;?>
													</tr>
												</thead>
												<tbody>
													<?php foreach($_nationwideSummaryDataSet as $_rowKey => $_rowDataSet):?>
														<?php if($_rowKey == 0 || ((count($_nationwideSummaryDataSet)-1) == $_rowKey) || ((count($_nationwideSummaryDataSet)-2) == $_rowKey)) continue; ?>
														<tr>
														<?php foreach($_rowDataSet as $_columnData):?>
														<td><?php echo ($_columnData == NULL)?"-":$_columnData; ?></td>
														<?php endforeach;?>
														</tr>
													<?php endforeach;?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="row mt-4">
										<div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
											<div class="card-body">
												<h5 class="card-title"><?php echo $_nationwideSummaryDataSet[count($_nationwideSummaryDataSet)-2][0];?></h5>
												<p class="card-text"><?php echo $_nationwideSummaryDataSet[count($_nationwideSummaryDataSet)-1][0];?></p>
											</div>
										</div>
										<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
											<div class="card-body">
												<h5 class="card-title">Data Source</h5>
												<p class="card-text">DGHS</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Population Wise Infection rate</h3>
										<div class="card-options">
											<i class="fa fa-table mr-2 text-success"></i>
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div id="population-wise-infection"></div>
										<div class="row">
											<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
												<div class="card-body">
													<h5 class="card-title"><?php echo $_populationWiseCaseDataSet[count($_populationWiseCaseDataSet)-2][0];?></h5>
													<p class="card-text"><?php echo $_populationWiseCaseDataSet[count($_populationWiseCaseDataSet)-1][0];?></p>
												</div>
											</div>
											<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
												<div class="card-body">
													<h5 class="card-title">Data Source</h5>
													<p class="card-text">DGHS</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-2 -->

						<!-- Row-3 -->
						<div class="row">
							<div class="col-xl-8 col-md-12">
								<div class="row">
									<div class="col-xl-6 col-md-12">
										<div class="card">
											<div class="card-header cart-height-customize">
												<h3 class="card-title">Confirmed Cases % by Age Group </h3>
												<div class="card-options">
													<i class="fa fa-download text-danger"></i>
												</div>
											</div>
											<div class="card-body">
												<div id="case_by_age"></div>
											</div>
										</div>
										<div class="card">
											<div class="card-header cart-height-customize">
												<h3 class="card-title">Confirmed +ve Death % by Age Group</h3>
												<div class="card-options">
													<i class="fa fa-download text-danger"></i>
												</div>
											</div>
											<div class="card-body">
												<div id="death_by_age"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-md-12">
										<div class="card">
											<div class="card-header cart-height-customize">
												<h3 class="card-title">Cases by Gender</h3>
												<div class="card-options">
													<i class="fa fa-download text-danger"></i>
												</div>
											</div>
											<div class="card-body">
												<div id="case_by_gender"></div>
											</div>
										</div>
										<div class="card">
											<div class="card-header cart-height-customize">
												<h3 class="card-title">Death by Gender</h3>
												<div class="card-options">
													<i class="fa fa-download text-danger"></i>
												</div>
											</div>
											<div class="card-body">
												<div id="death_by_gender"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Avarage Delay Time<br/><span class="text-ash" style="font-size: 10px;">26th July, 2020 to 7th August, 2020</span></h3>
										<div class="card-options">
											<!--<i class="fa fa-table mr-2 text-success"></i>-->
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div class="card-body mt-6 text-center">
											<h4 class="gray-600">Sample Collection to Test</h4>
											<h3 class="text-success"><?php echo number_format($_averageDelayTimeDataSet[count($_averageDelayTimeDataSet)-1][0], 2);?> Days</h3>
										</div>
										<hr />
										<div class="card-body mb-7 text-center">
											<h4>Test to Result</h4>
											<h3 class="text-success"><?php echo number_format($_averageDelayTimeDataSet[count($_averageDelayTimeDataSet)-1][1], 2);?> Days</h3>
										</div>
										<div class="card-body">
												<div class="card-body">
													<h5 class="card-title">Data Source</h5>
													<p class="card-text">a2i database</p>
												</div>
											</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-3 -->
						
						<!-- Row-4 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Time Series</h3>
										<div class="card-options">
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div id="time-seris-graph"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-4 -->

					</div>
				</div>
				<!-- End app-content-->
			</div>


			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2020 <a href="#">COVID-19, National Dashboard</a>. All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>
		<!-- End Page -->
		
		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>
		
		<?php include_once 'footer-js.php' ?>
		<script type="text/javascript">
			/* Population Wise Infection */
			<?php 
				$_populationGenderData = array();
				foreach($_populationWiseCaseDataSet as $_rowKey => $_rowData){
					if($_rowKey == 0 || ((count($_populationWiseCaseDataSet)-1) == $_rowKey) || ((count($_populationWiseCaseDataSet)-2) == $_rowKey)) continue;
					$_populationGenderData[] = array('name' => $_rowData[0], 'y' => ($_rowData[3]*100));
					#print_r($_rowData);exit;
				}
			?>
			/*Highcharts.setOptions({
				colors: ['#01BAF2', '#71BF45', '#FAA74B']
			});*/
			Highcharts.chart('population-wise-infection', {
				chart: {
				  plotBackgroundColor: null,
				  plotBorderWidth: null,
				  plotShadow: false,
				  type: 'pie'
				},
				title: {
				  text: '',
				  y:0
				},
				credits:{
					enabled:false
				},
				legend:{
					enabled:true,
					labelFormatter: function () {
						return this.name+': <b> '+this.y + '%</b>';
					}
				},
				tooltip: {
				  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				plotOptions: {
				  pie: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels: {
					  enabled: false,
					  formatter:function(){
						return this.key+ ': ' + this.y + '%';
					  }
					},
					showInLegend: true
				  }
				},
				series: [{
				  name: 'Infected',
				  colorByPoint: true,
				  innerSize: '70%',
				  data: <?php echo json_encode($_populationGenderData); ?>
				}]
			});
			
			// Age Wise Infected Distribution
			<?php 
			$_ageWiseInfectCategories = $_ageWiseInfectData = array();
			
			foreach($_ageWiseInfectDataSet as $_rowKey => $_rowData){
				if($_rowKey == 0) continue;
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 1){
						$_ageWiseInfectCategories[] = $_columnData;
					}elseif($_key == 2){
						$_ageWiseInfectData[] = $_columnData;
					}
				}
			}
			
			$_ageWiseInfectData = array('name' => 'Infected', 'data' => $_ageWiseInfectData);
			
			#print_r($_ageWiseInfectData);
			#exit;
			?>
			Highcharts.chart('case_by_age', {
				chart: {
					type: 'column',
					height: 200
				},
				title: {
					text: ''
				},
				subtitle: {
					text: ''
				},
				credits:{
					enabled:false
				},
				legend:{
					enabled:false
				},
				yAxis: {
					title: {
						text: ''
					},
					labels: {
						formatter: function() {
						   return this.value+"%";
						}
					}
				},
				xAxis: {
					categories: <?php echo json_encode($_ageWiseInfectCategories); ?>
				},
				tooltip: {
				  pointFormat: '{series.name}: <b>{point.y}%</b>',
				  /*valueSuffix: ' cm',
				  shared: true*/
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				colors: ['#ffab00'],
				series: <?php echo json_encode(array($_ageWiseInfectData)); ?>
			});

			// Age Wise Death Distribution
			<?php 
			$_ageWiseDeathCategories = $_ageWiseDeathData = array();
			
			foreach($_ageWiseDeathDataSet as $_rowKey => $_rowData){
				if($_rowKey == 0) continue;
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 1){
						$_ageWiseDeathCategories[] = $_columnData;
					}elseif($_key == 3){
						$_ageWiseDeathData[] = $_columnData;
					}
				}
			}
			
			$_ageWiseDeathData = array('name' => 'Death', 'data' => $_ageWiseDeathData);
			
			#print_r(_ageWiseDeathData);
			#exit;
			?>
			Highcharts.chart('death_by_age', {
				chart: {
					type: 'column',
					height: 200
				},
				title: {
					text: ''
				},
				subtitle: {
					text: ''
				},
				credits:{
					enabled:false
				},
				legend:{
					enabled:false
				},
				yAxis: {
					title: {
						text: ''
					},
					labels: {
						formatter: function() {
						   return this.value+"%";
						}
					}
				},
				xAxis: {
					categories: <?php echo json_encode($_ageWiseDeathCategories); ?>
				},
				tooltip: {
				  pointFormat: '{series.name}: <b>{point.y}%</b>',
				  /*valueSuffix: ' cm',
				  shared: true*/
				},
				plotOptions: {
					column: {
						pointPadding: 0.2,
						borderWidth: 0
					}
				},
				colors: ['#ef4b4b'],
				series: <?php echo json_encode(array($_ageWiseDeathData)); ?>
			});
			
			// Infected by Gender Group
			<?php 
			$_genderWiseInfectData = array();
			
			foreach($_genderWiseInfectDataSet as $_rowKey => $_rowData){
				if($_rowKey == 0) continue;
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 1){
						$_genderWiseInfectData[] = array('name' => 'Male', 'y' => $_columnData);
					}elseif($_key == 2){
						$_genderWiseInfectData[] = array('name' => 'Female', 'y' => $_columnData);
					}
				}
			}
			
			#print_r(_ageWiseDeathData);
			#exit;
			?>
			Highcharts.chart('case_by_gender', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie',
					height: 200
				},
				title: {
					text: ''
				},
				credits:{
					enabled:false
				},
				legend:{
					enabled:true,
					labelFormatter: function () {
						return this.name+': <b> '+this.y + '%</b>';
					}
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				accessibility: {
					point: {
						valueSuffix: '%'
					}
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				colors: ['#705fc9', '#fb1c52'],
				series: [{
					name: 'Infected',
					colorByPoint: true,
					data: <?php echo json_encode($_genderWiseInfectData); ?>
				}]
			});
			
			// Death by Gender Group
			<?php 
			$_genderWiseDeathCategories = $_genderWiseDeathData = array();
			
			foreach($_genderWiseDeathDataSet as $_rowKey => $_rowData){
				if($_rowKey == 0) continue;
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 3){
						$_genderWiseDeathData[] = array('name' => 'Male', 'y' => $_columnData);
					}elseif($_key == 5){
						$_genderWiseDeathData[] = array('name' => 'Female', 'y' => $_columnData);
					}
				}
			}
			
			#print_r(_ageWiseDeathData);
			#exit;
			?>
			Highcharts.chart('death_by_gender', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie',
					height: 200
				},
				title: {
					text: ''
				},
				credits:{
					enabled:false
				},
				legend:{
					enabled:true,
					labelFormatter: function () {
						return this.name+': <b> '+this.y + '%</b>';
					}
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				accessibility: {
					point: {
						valueSuffix: '%'
					}
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: false
						},
						showInLegend: true
					}
				},
				colors: ['#ffa600', '#00ffcb'],
				series: [{
					name: 'Infected',
					colorByPoint: true,
					data: <?php echo json_encode($_genderWiseDeathData); ?>
				}]
			});
			
			/* Time Seris Graph */
			<?php 
			$_seriesLabels = $_seriesSetData = $_timeSeriesData = array();
			#print_r($_timeSeriesDataSet);exit;
			foreach($_timeSeriesDataLabels as $_labelKey => $_labelText){
				if($_labelKey == 0) continue;
				$_seriesLabels[] = $_labelText;
			}

			foreach($_timeSeriesDataSet as $_rowKey => $_rowData){
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 0){
						$_columnData = date('d\/m\/Y', strtotime($_columnData));						
					}
					$_seriesSetData[$_timeSeriesDataLabels[$_key]][] = $_columnData;
				}
			}
			
			foreach($_seriesSetData as $_seriesLabel => $_seriesSet){
				if($_seriesLabel == "Date") continue;
				$_timeSeriesData[] = array('type' => 'area', 'name' => strtoupper($_seriesLabel), 'data' => $_seriesSet, 'marker' => array('symbol' => 'circle'));
			}
			#print_r($_seriesSetData);
			#exit;
			?>
			Highcharts.chart('time-seris-graph', {
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
					categories: <?php echo json_encode($_seriesSetData['Date']);?>
				},
				
				yAxis: {
					title: {
						text: ''
					},
					labels: {
						//enabled: false,
						formatter: function() {
						   return this.value;
						}
					}
				},
				
				plotOptions: {
					series: {
						fillOpacity:0,
						dataLabels:{
							enabled:false,
							color: 'black',
							formatter:function() {
								//var pcnt = (this.y / dataSum) * 100;
								return Highcharts.numberFormat(this.y);
							}
						}
					}
				},
				
				colors: ['#ffab00', '#38cb89', '#ef4b4b', '#5323a7'],
				
				series: <?php echo json_encode($_timeSeriesData);?>
			});
		</script>
	</body>
</html>