<?php
// Excel File Parser
$_filePath = 'SimpleXLSX.php';
require_once $_filePath;

ini_set('error_reporting', 0);

	
$_rawDataSet = $_mobilityTypeData = array();

if ($xlsxDataSet = SimpleXLSX::parse('data-source/mobility-predictive-importation.xlsx')){

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
	
	// Mobility Trend Line Graph
	$_columnSkipKey = array(0, 1, 2, 3, 16);
	foreach($_rawDataSet as $_rowDataKey => $_rawDataRow){
		if($_rowDataKey == 0) continue;
		foreach($_rawDataRow as $_columnKey => $_columnData){
			if(in_array($_columnKey, $_columnSkipKey)) continue;
			$_mblityType = $_rawDataRow[16];
			#echo $_columnData; exit;
			$_mobilityTypeData[$_mblityType][$_rawDataLabels[$_columnKey]] = ($_mobilityTypeData[$_mblityType][$_rawDataLabels[$_columnKey]])?$_mobilityTypeData[$_mblityType][$_rawDataLabels[$_columnKey]]+$_columnData:$_columnData;
		}
	}
	
	foreach($_columnSkipKey as $_skipCol){
		unset($_rawDataLabels[$_skipCol]);
	}
	#print_r($_rawDataLabels); exit;
	
	// Mobility Trend Line Graph
	$_columnSkipKey = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 16);
	foreach($_rawDataSet as $_rowDataKey => $_rawDataRow){
		if($_rowDataKey == 0) continue;
		foreach($_rawDataRow as $_columnKey => $_columnData){
			if(in_array($_columnKey, $_columnSkipKey)) continue;
			$_mblityType = $_rawDataRow[16];
			$_districtName = str_replace(array("'", " "),array("","_"),$_rawDataRow[2]);
			#echo $_columnData; exit;
			if($_mblityType == "Mobility_In"){
				if($_districtWiseData[$_districtName]){
					//echo $_districtWiseData[$_districtName]; exit;
					$_districtWiseData[$_districtName] = $_districtWiseData[$_districtName]+$_columnData;
				}else{
					$_districtWiseData[$_districtName] = $_columnData;
				}
			}
		}
	}
	
	
}
#print_r($_districtWiseData); 
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
									<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

							
						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Predicted Importation</h3>
										<div class="card-options">
											<i class="fa fa-table mr-2 text-success"></i>
											<i class="fa fa-download text-danger"></i>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-4">
												<div class="row">
													<div class="col-xl-12 col-md-12">
														<?php include_once 'bd-map-html.php' ?>
													</div>
												</div>
											</div>
											<div class="col-lg-8">
										       <div id="mobility-predictive-importation"></div>
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
						<!-- End Row-1 -->
						
						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row mt-4">
										<div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
											<div class="card-body">
												<h5 class="card-title">Short Description</h5>
												<p class="card-text">Data udpated from 11th July, 2020 to 22nd July, 2020</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
											<div class="card-body">
												<h5 class="card-title">Data Source</h5>
												<p class="card-text">a2i database</p>
											</div>
										</div>
									</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-2 -->

						<div class="row">
							<div class="col-xl-12 col-md-12">
								<iframe id="rtIframeData" width="100%" height="800" src="https://arcg.is/0OXj4S" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>
							</div>
						</div>

						

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
			#print_r($_mobilityTypeData); exit;
			$_mobilityTypekSeriesData = array();
			foreach($_mobilityTypeData as $_mobilityTypeLabel => $_mobilityTypeValue){
				#echo $$_mobilityTypeLabel; exit;
				
				$_mobilityTypekSeriesData[] = array('type' => 'area', 'name' => strtoupper($_mobilityTypeLabel), 'data' => array_values($_mobilityTypeValue), 'marker' => array('symbol' => 'circle'));
			}
			#print_r($_seriesSetData);
			#exit;
			?>
			Highcharts.chart('mobility-predictive-importation', {
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
					categories: <?php echo json_encode(array_values($_rawDataLabels));?>
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
				
				colors: ['#ffab00', '#BC2B4C'],
				
				series: <?php echo json_encode($_mobilityTypekSeriesData);?>
			});
			
			// Map JS Data
			$(document).ready(function(){
				/* <?php print_r($_districtWiseData); ?> */
				<?php 
					$_colorCodes = array( '10' => '#FCAA94', '25000' => '#F69475', '50000' => '#F37366', '70000' => '#E5515D', '100000' => '#CD3E52', '200000' => '#BC2B4C');
					$_existDataGroups = array();
					foreach($_districtWiseData as $_mobInDistrictName => $_mobInDistrictVal){
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