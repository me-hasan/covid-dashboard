<?php// Excel File Parser$_filePath = 'SimpleXLSX.php';require_once $_filePath;	$_hospitalCapacityDataSet = $_deathLocationPercentageDataSet = NULL;if ($xlsxDataSet = SimpleXLSX::parse('data-source/hospital-and-patient-analysis.xlsx')){	$_fileSheetNames = $xlsxDataSet->sheetNames();		#echo $xlsxDataSet->sheetName(0);	#print_r($xlsxDataSet->sheetNames()); exit;		// Hospital Capacity	if(in_array("Hospital Capacity", $_fileSheetNames)){		$_hospitalCapacityDataSet = $xlsxDataSet->rows(0);	}	$_hospitalCapacityDataLabels = $_hospitalCapacityDataSet[0];		// Death Location Percentage	if(in_array("Death Location Percentage", $_fileSheetNames)){		$_deathLocationPercentageDataSet = $xlsxDataSet->rows(1);	}	$_deathLocationPercentageDataLabels = $_deathLocationPercentageDataSet[0];		}/*print_r($_hospitalCapacityDataSet); print_r($_hospitalCapacityDataLabels); exit;*/?><!DOCTYPE html>
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
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Hospital and Patient Analysis</a></li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Top Row -->						<div class="row">							<div class="col-xl-8 col-lg-8 col-md-12">								<div class="card">									<div class="card-header">										<h3 class="card-title">Hospital Wise Capacity Data</h3>										<div class="card-options">											<i class="fa fa-download text-danger"></i>										</div>									</div>									<div class="card-body">										<div class="table-responsive">											<table id="case_analysis_dtable" class="table table-striped table-bordered text-nowrap">												<thead>													<tr>														<?php foreach($_hospitalCapacityDataLabels as $_tableHead):?>														<th class="border-bottom-0"><?php echo $_tableHead; ?></th>														<?php endforeach;?>													</tr>												</thead>												<tbody>													<?php foreach($_hospitalCapacityDataSet as $_rowKey => $_rowDataSet):?>														<?php if($_rowKey == 0 || ((count($_hospitalCapacityDataSet)-1) == $_rowKey) || ((count($_hospitalCapacityDataSet)-2) == $_rowKey)) continue; ?>														<tr>														<?php foreach($_rowDataSet as $_columnData):?>														<td><?php echo ($_columnData == NULL)?"-":$_columnData; ?></td>														<?php endforeach;?>														</tr>													<?php endforeach;?>												</tbody>											</table>										</div>									</div>									<div class="row mt-4">										<div class="col-xl-8 col-lg-6 col-md-6 col-xm-12">											<div class="card-body">												<h5 class="card-title">Short Description</h5>												<p class="card-text">Due to many data columns you need click on the data row to see all data.</p>											</div>										</div>										<div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">											<div class="card-body">												<h5 class="card-title">Data Source</h5>												<p class="card-text"></p>											</div>										</div>									</div>								</div>							</div>							<div class="col-xl-4 col-lg-4 col-md-12">								<div class="card">									<div class="card-header">										<h3 class="card-title">Death Location Percentage</h3>										<div class="card-options">											<i class="fa fa-table mr-2 text-success"></i>											<i class="fa fa-download text-danger"></i>										</div>									</div>									<div class="card-body">										<div id="death-location-percentage"></div>										<div class="row">											<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">												<div class="card-body">													<h5 class="card-title">Short Description</h5>													<p class="card-text"></p>												</div>											</div>											<div class="col-xl-12 col-lg-6 col-md-6 col-xm-12">												<div class="card-body">													<h5 class="card-title">Data Source</h5>													<p class="card-text">DGHS</p>												</div>											</div>										</div>									</div>								</div>							</div>						</div>						<!-- End Top Row -->																		<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Patient Comorbidity Analysis</h3>
											<div class="card-options">
												<i class="fa fa-table mr-2"></i>
												<i class="fa fa-download"></i>
											</div>
										</div>
										<div class="card-body">
											     <img src="assets/images/chart/hospital-and-patient-analysis-1.jpg" alt="Patient Comorbidity Analysis" />
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
						<!-- End Row-2 -->
						
						<!-- Row-3 -->
						<div class="row">
							<div class="col-xl-7 col-lg-7 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Patient Risk Level</h3>
											<div class="card-options">
												<i class="fa fa-table mr-2"></i>
												<i class="fa fa-download"></i>
											</div>
										</div>
										<div class="card-body">
											     <img src="assets/images/chart/hospital-and-patient-analysis-3.jpg" alt="Patient Risk Level" />
										</div>
									</div>								
							</div>
							<div class="col-xl-5 col-lg-5 col-md-12">
								<div class="card">
									<div class="card-header">
									        <h3 class="card-title">Patient Risk Level</h3>
											<div class="card-options">
												<i class="fa fa-download"></i>
											</div>
									</div>
									<div class="card-body">
										<img src="assets/images/chart/hospital-and-patient-analysis-2.jpg" alt="Death % Hospital Vs Home" />										
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Row-3 -->						
						
						
						<!-- Row-4 -->
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
		<script type="text/javascript">			/* Death Location Percentage */			<?php 				$_deathLocationPercentageData = array();				foreach($_deathLocationPercentageDataSet as $_rowKey => $_rowData){					if($_rowKey == 0) continue;					$_deathLocationPercentageData[] = array('name' => $_rowData[0], 'y' => (float)number_format($_rowData[1],2));				}			?>			Highcharts.chart('death-location-percentage', {				chart: {				  plotBackgroundColor: null,				  plotBorderWidth: null,				  plotShadow: false,				  type: 'pie'				},				title: {				  text: '',				  y:0				},				credits:{					enabled:false				},				legend:{					enabled:true,					labelFormatter: function () {						return this.name+': <b> '+this.y + '%</b>';					}				},				tooltip: {				  pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'				},				plotOptions: {				  pie: {					allowPointSelect: true,					cursor: 'pointer',					dataLabels: {					  enabled: false,					  formatter:function(){						return this.key+ ': ' + this.y + '%';					  }					},					showInLegend: true				  }				},				series: [{				  name: 'Death Percentage',				  colorByPoint: true,				  innerSize: '70%',				  data: <?php echo json_encode($_deathLocationPercentageData); ?>				}]			});		</script>
	</body>
</html>