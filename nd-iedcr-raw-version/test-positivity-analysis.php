<?php

ini_set('error_reporting', 0);

// Excel File Parser
$_filePath = 'SimpleXLSX.php';
require_once $_filePath;

	
$_rawDataSet = $_nationalLevelDataSet = $_testPositvityTrendyDataSet = $_todayDataSet = $_genderWiseDeathDataSet = $_timeSeriesDataSet = $_genderWiseInfectDataSet = $_averageDelayTimeDataSet = NULL;
$_districtWiseData = array();

if ($xlsxDataSet = SimpleXLSX::parse('data-source/test-positivity-rate.xlsx')){

	$_fileSheetNames = $xlsxDataSet->sheetNames();
	
	#echo $xlsxDataSet->sheetName(0);
	#print_r($xlsxDataSet->sheetNames()); exit;
	//Array ( [0] => Data [1] => National Level [2] => National Test Positivity Trend [3] => Today [4] => Average ) 
	
	// Data
	if(in_array("Data", $_fileSheetNames)){
		$_rawDataSet = $xlsxDataSet->rows(0);
	}
	#print_r($_rawDataSet); exit;
	$_rawDataLabels = $_rawDataSet[0];
	
	// Map Data
	$_columnSkipKey = array(0, 1, 3, 4, 5, 6, 7);
	foreach($_rawDataSet as $_rowDataKey => $_rawDataRow){
		if($_rowDataKey == 0) continue;
		foreach($_rawDataRow as $_columnKey => $_columnData){
			if(in_array($_columnKey, $_columnSkipKey)) continue;
			//$_mblityType = $_rawDataRow[16];
			$_districtName = str_replace(array("'", " "),array("","_"),$_rawDataRow[2]);
			#echo $_columnData; exit;
			//if($_mblityType == "Mobility_In"){
				if($_districtWiseData[$_districtName]){
					//echo $_districtWiseData[$_districtName]; exit;
					$_districtWiseData[$_districtName] = $_districtWiseData[$_districtName]+$_columnData;
				}else{
					$_districtWiseData[$_districtName] = $_columnData;
				}
			//}
		}
	}
	
	// Today
	if(in_array("National Level", $_fileSheetNames)){
		$_nationalLevelDataSet = $xlsxDataSet->rows(1);
	}
	//$_dataTableLabels = $_dataTableDataSet[0];
	
	// National Test Positivity Trend
	if(in_array("National Test Positivity Trend", $_fileSheetNames)){
		$_testPositvityTrendyDataSet = $xlsxDataSet->rows(2);
	}
	$_testPositvityTrendyDataLabels = $_testPositvityTrendyDataSet[0];
	unset($_testPositvityTrendyDataSet[0]);
	
	// Today
	if(in_array("Today", $_fileSheetNames)){
		$_todayDataSet = $xlsxDataSet->rows(3);
	}
	$_genderWiseDeathDataLabels = $_todayDataSet[0];
	
	// Average
	if(in_array("Average", $_fileSheetNames)){
		$_averageDataSet = $xlsxDataSet->rows(4);
	}
	$_averageDataLabels = $_averageDataSet[0];
	
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
						<div class="page-header page-header-padding-top">
							<div class="page-leftheader">								
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="/"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="">Test Positivity Analysis</a></li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-8 col-lg-8 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Test Positivity Rate</h3>
											<div class="card-options">
												<i class="fa fa-table mr-2 text-success"></i>
												<i class="fa fa-download text-danger"></i>
											</div>
										</div>
										<div class="card-body">
											<div id="test-positivity-trend"></div>
										</div>
										<div class="row mt-4">
											<div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">
												<div class="card-body">
													<h5 class="card-title">Short Description</h5>
													<p class="card-text">Short Description text will place here.</p>
												</div>
											</div>
											<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
												<div class="card-body">
													<h5 class="card-title">Data Source</h5>
													<p class="card-text">Data Source text will place here.</p>
												</div>
											</div>
										</div>
									</div>								
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0 pt-0 bg-before-none">
										<div class="card-options">
											<i class="fa fa-table mr-2 text-success"></i>
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div class="card-body text-center">
											<h4 class="text-ash">Today’s Test Positivity Rate</h4>
											<h2 class="text-success"><?php echo number_format($_todayDataSet[count($_todayDataSet)-1][2],2);?>%</h2>
										</div>
										<div class="card-body text-center border-0">
											<h4 class="text-ash">Number of Performed Tests</h4>
											<h2 class="text-success"><?php echo $_todayDataSet[count($_todayDataSet)-1][1];?></h2>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-0 pb-0 pt-0 bg-before-none">
										   <div class="card-options">
												<i class="fa fa-table mr-2 text-success"></i>
												<i class="fa fa-download text-danger"></i>
											</div>
									</div>
									<div class="card-body">
										<div class="card-body text-center">
											<h4 class="text-ash">Average Test Positivity Rate</h4>
											<h2 class="text-success"><?php echo number_format($_averageDataSet[count($_averageDataSet)-1][1],2);?>%</h2>
										</div>
										<div class="card-body text-center border-0">
											<h4 class="text-ash">Average # of Performed Tests</h4>
											<h2 class="text-success"><?php echo $_averageDataSet[count($_averageDataSet)-1][0];?></h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-1 -->						
						
						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Geo Location Wise Test Positivity Rate​</h3>
										<div class="card-options">
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-4">
												<?php include_once 'bd-map-html.php' ?>
											</div>
											<div class="col-lg-8">
												<div class="expanel expanel-default">
													<div class="card-body p-0">
														<div class="table-responsive">
															<table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">
																<thead>
																	<tr>
																		<?php foreach($_rawDataLabels as $_indexKey => $_tableHead):?>
																		<?php if($_indexKey == 0 || $_indexKey == 4 || $_indexKey == 1 || $_indexKey == 3) continue; ?>
																		<th class="border-bottom-0"><?php echo $_tableHead; ?></th>
																		<?php endforeach;?>
																	</tr>
																</thead>
																<tbody>
																	<?php foreach($_rawDataSet as $_rowKey => $_rowData): #print_r($_rowData); exit;?>
																		<?php if($_rowKey == 0 || ($_rowData[8] == NULL)) continue; ?>
																		<tr>
																		<?php foreach($_rowData as $_colKey => $_columnData):?>
																		<?php 
																			if($_colKey == 0 || $_colKey == 4 || $_colKey == 1 || $_colKey == 3) continue;
																			if($_colKey == 5){
																				$_columnData = '-';#date('d/m/Y', strtotime($_columnData));
																			}
																			if($_colKey == 8){
																				#echo (float)$_columnData; exit;
																				$_columnData = round($_columnData, 2);
																			}
																			$_colParts = explode("[", $_columnData);
																			if(count($_colParts) > 1){
																				$_columnData = $_colParts[0]; 
																			}else{
																				$_colParts = explode("(", $_columnData);
																				if(count($_colParts) > 1){
																					$_columnData = $_colParts[0]; 
																				}
																			}
																		?>
																		<td><?php echo ($_columnData == NULL)?"-":trim($_columnData); ?></td>
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
										
										<div class="row mt-4 mb-2">
											<div class="col-xl-12 col-md-12 ml-4">
												<div id="color-group"></div>
											</div>
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
									<div class="card-body">
										<div class="row mt-4">
										<div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
											<div class="card-body">
												<h5 class="card-title">Short Description</h5>
												<p class="card-text">Short Description text will place here.</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
											<div class="card-body">
												<h5 class="card-title">Data Source</h5>
												<p class="card-text">Data Source text will place here.</p>
											</div>
										</div>
									</div>
									</div>
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
			/* Time Seris Graph */
			<?php 
			$_seriesLabels = $_testPositvityTrendyDataTemp = $_testPositvityTrendyData = array();
			#print_r($_timeSeriesDataSet);exit;
			/*foreach($_timeSeriesDataLabels as $_labelKey => $_labelText){
				if($_labelKey == 0) continue;
				$_seriesLabels[] = $_labelText;
			}*/

			foreach($_testPositvityTrendyDataSet as $_rowKey => $_rowData){
				foreach($_rowData as  $_key => $_columnData){
					if($_key == 0){
						$_columnData = date('d\/m\/Y', strtotime($_columnData));						
					}
					$_testPositvityTrendyDataTemp[$_testPositvityTrendyDataLabels[$_key]][] = (float) number_format($_columnData, 2);
				}
			}
			
			foreach($_testPositvityTrendyDataTemp as $_testPositvityTrendLabel => $_testPositvityTrendSet){
				if($_testPositvityTrendLabel == "date") continue;
				$_testPositvityTrendyData[] = array('type' => 'area', 'name' => strtoupper($_testPositvityTrendLabel), 'data' => $_testPositvityTrendSet, 'marker' => array('symbol' => 'circle'));
			}
			#print_r($_testPositvityTrendyData);
			#exit;
			?>
			Highcharts.chart('test-positivity-trend', {
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
					enabled:false,
					layout: 'horizontal',
					align: 'center',
					verticalAlign: 'top'
				},
				
				credits:{
					enabled:false
				},
				
				xAxis: {
					categories: <?php echo json_encode($_testPositvityTrendyDataTemp['date']);?>/*,
					labels: {
						formatter: function() {
						   return 'Test Positivity Rate: ' +this.value+'%';
						}
					}*/
				},
				
				yAxis: {
					title: {
						text: ''
					},
					labels: {
						//enabled: false,
						formatter: function() {
						   return this.value+'%';
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
				
				colors: ['#ef4b4b'],
				
				series: <?php echo json_encode($_testPositvityTrendyData);?>
			});
			
			// Map JS Data
			$(document).ready(function(){
				/* <?php print_r($_districtWiseData); ?> */
				<?php 
					$_colorCodes = array( '5' => '#FCAA94', '10' => '#F69475', '30' => '#F37366', '50' => '#E5515D', '75' => '#CD3E52', '100' => '#ed2355');
					$_existDataGroups = array();
					foreach($_districtWiseData as $_mobInDistrictName => $_mobInDistrictVal){
						//echo $_mobInDistrictVal = (int) $_mobInDistrictVal;
						$_groupColorCode = NULL;
						foreach($_colorCodes as $_colorRange => $_colorCode){
							if($_mobInDistrictVal <= $_colorRange){
								$_groupColorCode = $_colorCode;
								$_existDataGroups[$_colorRange] = $_colorCode;
								break;
							}
						}
				?>
					$('#<?php echo $_mobInDistrictName; ?> path').attr('fill', '<?php echo $_groupColorCode;?>');
				<?php
					}
				?>
				
				/* <?php print_r($_existDataGroups); ?> */
				<?php
					$_groupColorData = NULL;
					$_startData = 0;
					ksort($_existDataGroups);
					foreach($_existDataGroups as $_colorRange => $_colorCode){						
						$_groupData.= '<div class="col-auto"><span class="colorinput-color" style="background-color:'.$_colorCode.'"></span><span class="group-color-label text-ash p-1">'.$_startData.'-'.$_colorRange.'</span></div>';
						$_startData = $_colorRange+1;
					}
				?>
				$('#color-group').append('<div class="row gutters-xs"><?php echo $_groupData; ?></div>');
			});
		</script>
	</body>
</html>