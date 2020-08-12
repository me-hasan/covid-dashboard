<?php
// Excel File Parser
$_filePath = 'SimpleXLSX.php';
require_once $_filePath;

	
$_currentStatusData = $_zoneInformationDataSet = $_dataTableLabels = $_changeStatusDataSet = $_genderWiseDeathDataSet = $_timeSeriesDataSet = $_genderWiseInfectDataSet = $_averageDelayTimeDataSet = NULL;

if ($xlsxDataSet = SimpleXLSX::parse('data-source/risk-zone-analysis.xlsx')){

	$_fileSheetNames = $xlsxDataSet->sheetNames();
	
	#echo $xlsxDataSet->sheetName(0);
	#print_r($xlsxDataSet->sheetNames()); exit;
	
	// Current Status
	if(in_array("Current Status", $_fileSheetNames)){
		$_currentStatusData = $xlsxDataSet->rows(0);
	}
	//$_lastCardDataSet = $_currentStatusData[count($_currentStatusData)-1];
	
	// Zone Information
	if(in_array("Zone Information", $_fileSheetNames)){
		$_zoneInformationDataSet = $xlsxDataSet->rows(5);
	}
	$_dataTableLabels = $_zoneInformationDataSet[0];
	
	// Change Status
	if(in_array("Change Status", $_fileSheetNames)){
		$_changeStatusDataSet = $xlsxDataSet->rows(4);
	}
	$_changeStatusDataSetDataLabels = $_changeStatusDataSet[0];
	
	// National Level
	if(in_array("Weekly Change", $_fileSheetNames)){
		$_nationalLevelDataSet = $xlsxDataSet->rows(6);
	}
	$_nationalLevelDataLabels = $_nationalLevelDataSet[0];
	unset($_nationalLevelDataSet[0]);
	
	#unset($_changeStatusDataSet[0]);
	#print_r($_changeStatusDataSet);exit;
	/*
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
	unset($_timeSeriesDataSet[0]);*/
	
	
}
#print_r($_populationWiseCaseDataSet); 
#print_r($_lastCardDataSet); 
#exit;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>

	<?php include_once 'head.php'; ?>
		
	</head>

	<body class="app sidebar-mini risk-zone-analysis">

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
						<div class="row">
							<div class="col-xl-10 col-lg-6 col-md-6 col-xm-12">
								<div class="row">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Current Zone Status</h3>
											<div class="card-options">
												<i class="fa fa-table mr-2 text-success"></i>
												<i class="fa fa-download text-danger"></i>
											</div>
										</div>
										<div class="card-body">
											<div class="row top-zone">
												<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
													<!--<div class="card overflow-hidden dash1-card border-0">
														<div class="card-body">
															<h4 class=" mb-1 ">Red Zone</h4>
															<h2 class="mb-1 number-font">10,500</h2>
															<small class="fs-12 text-muted">Compared to Week Day</small>
															<span class="ratio bg-danger">76%</span>
														</div>
													</div>-->
												</div>
												<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
													<div class="card overflow-hidden dash1-card border-0">
														<div class="card-body">
															<h5 class="mb-1">Red Zone</h5>
															<h2 class="mb-1 number-font"><?php echo $_currentStatusData[count($_currentStatusData)-1][1];?></h2>
															<small class="fs-12 text-muted">Compared to Week Day</small>
															<span class="ratio bg-danger"><?php echo number_format($_currentStatusData[count($_currentStatusData)-1][2], 0);?>%</span>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
													<div class="card overflow-hidden dash1-card border-0">
														<div class="card-body">
															<h5 class=" mb-1">Yellow Zone</h5>
															<h2 class="mb-1 number-font"><?php echo $_currentStatusData[count($_currentStatusData)-1][3];?></h2>
															<small class="fs-12 text-muted">Compared to Week Day</small>
															<span class="ratio bg-warning"><?php echo number_format($_currentStatusData[count($_currentStatusData)-1][4], 0);?>%</span>
														</div>
													</div>
												</div>
												<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
													<div class="card overflow-hidden dash1-card border-0">
														<div class="card-body">
															<h5 class=" mb-1">Green Zone</h5>
															<h2 class="mb-1 number-font"><?php echo $_currentStatusData[count($_currentStatusData)-1][5];?></h2>
															<small class="fs-12 text-muted">Compared to Week Day</small>
															<span class="ratio bg-success"><?php echo number_format($_currentStatusData[count($_currentStatusData)-1][6], 0);?>%</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Inner Row -->
								<div class="row">
									<div class="col-xl-3 col-lg-8 col-md-12">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">Last Zone Status</h3>
												<div class="card-options">
													<i class="fa fa-download text-danger"></i>
												</div>
											</div>
											<div class="card-body last-zone-status">
												<div class="row">
													<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-danger text-center">Red Zone</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Red Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][0];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-danger d-none">76%</span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
													<h6 class="text-warning text-center">Yellow Zone</h6>
													<div class="card overflow-hidden dash1-card border-0">
														<div class="card-body">
															<h5 class=" mb-1">Yellow Zone</h5>
															<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][0];?></h2>
															<small class="fs-12 text-muted d-none">Compared to Week Day</small>
															<span class="ratio bg-warning d-none">35%</span>
														</div>
													</div>
												</div>
												<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">
													<h6 class="text-success text-center">Green Zone</h6>
													<div class="card overflow-hidden dash1-card border-0">
														<div class="card-body">
															<h5 class=" mb-1">Green Zone</h5>
															<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][0];?></h2>
															<small class="fs-12 text-muted d-none">Compared to Week Day</small>
															<span class="ratio bg-success d-none">62%</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-9 col-lg-4 col-md-12">
										<div class="card">
											<div class="card-header">
												<h3 class="card-title">Change Status</h3>
												<div class="card-options">
													<i class="fa fa-table mr-2 text-success"></i>
													<i class="fa fa-download text-danger"></i>
												</div>
											</div>
											<div class="card-body">
												<div class="row top-zone">
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-danger text-center">Remain in Red zone</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Red Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][1];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-danger d-none">76%</span>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-warning text-center">Converted into Yellow</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Yellow Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][1];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-warning d-none">35%</span>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-success text-center">Converted into Green</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Green Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][1];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-success d-none">62%</span>
															</div>
														</div>
													</div>
												</div>
												<div class="row top-zone">
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-danger text-center">Converted into Red</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Red Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][2];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-danger d-none d-none">76%</span>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-warning text-center">Converted into Yellow</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Yellow Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][2];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-warning d-none">35%</span>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-success text-center">Remain in Green zone</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Green Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][2];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-success d-none">62%</span>
															</div>
														</div>
													</div>
												</div>
												<div class="row top-zone">
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-danger text-center">Converted into Red</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Red Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[1][3];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-danger d-none">76%</span>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-warning text-center">Converted into Yellow</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Yellow Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[3][3];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-warning d-none">35%</span>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
														<h6 class="text-success text-center">Remain in Green zone</h6>
														<div class="card overflow-hidden dash1-card border-0">
															<div class="card-body">
																<h5 class=" mb-1">Green Zone</h5>
																<h2 class="mb-1 number-font"><?php echo $_changeStatusDataSet[5][3];?></h2>
																<small class="fs-12 text-muted d-none">Compared to Week Day</small>
																<span class="ratio bg-success d-none">62%</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Inner Row -->
							</div>
							<div class="col-xl-2 col-lg-6 col-md-6 col-xm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Data Source</h3>
									</div>
									<div class="card-body">
										<div class="mb-9 mt-9 pb-5 pt-5">Content is comming soon</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Short Description</h3>
									</div>
									<div class="card-body">
										<div class="mb-9 mt-9 pb-6 pt-8">Content is comming soon</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-1 -->

						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-5 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Weekly Change</h3>
										<div class="card-options">
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div id="weekly_zone_change"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-7 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Zone Information​</h3>
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
													<?php foreach($_zoneInformationDataSet as $_rowKey => $_rowDataSet):?>
														<?php if($_rowKey == 0) continue; ?>
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
								</div>
							</div>
						</div>
						<!-- End Row-2 -->
						
						<!-- Row-3 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-body" id="iframe_riskdata"></div>
								</div>
							</div>
						</div>
						<!-- End Row-3 -->

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
			<?php 
			$_seriesLabels = $_testPositvityTrendyDataTemp = $_testPositvityTrendyData = array();
			#print_r($_timeSeriesDataSet);exit;
			/*foreach($_timeSeriesDataLabels as $_labelKey => $_labelText){
				if($_labelKey == 0) continue;
				$_seriesLabels[] = $_labelText;
			}*/

			foreach($_nationalLevelDataSet as $_rowKey => $_rowData){
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 0){
						$_columnData = date('d\/m\/Y', strtotime($_columnData));						
					}
					$_testPositvityTrendyDataTemp[$_nationalLevelDataLabels[$_key]][] = $_columnData;
				}
			}
			
			foreach($_testPositvityTrendyDataTemp as $_testPositvityTrendLabel => $_testPositvityTrendSet){
				if($_testPositvityTrendLabel == "Date") continue;
				$_testPositvityTrendyData[] = array('type' => 'area', 'name' => strtoupper($_testPositvityTrendLabel), 'data' => $_testPositvityTrendSet, 'marker' => array('symbol' => 'circle'));
			}
			#print_r($_testPositvityTrendyDataTemp);
			#exit;
			?>
			Highcharts.chart('weekly_zone_change', {
				chart: {
					height: 330
				},
				title: {
					text: ''
				},

				subtitle: {
					text: ''
				},
				
				legend: {
					enabled:true,
					layout: 'horizontal',
					align: 'center',
					verticalAlign: 'bottom'
				},
				
				credits:{
					enabled:false
				},
				
				xAxis: {
					categories: <?php echo json_encode($_testPositvityTrendyDataTemp['Date']);?>
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
				colors: ['#38cb89', '#ffab00', '#ef4b4b'],
				
				series: <?php echo json_encode($_testPositvityTrendyData);?>
			});
			
			$(document).ready(function(){
				$('#iframe_riskdata').html('<iframe id="rtIframeData" width="100%" height="800" src="https://arcg.is/ryTjT0" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>');
			});
		</script>

	</body>
</html>