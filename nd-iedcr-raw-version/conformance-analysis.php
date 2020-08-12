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

							
						<!-- Row-3 -->
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Conformance</h3>
											<div class="card-options">
												<i class="fa fa-table mr-2"></i>
												<i class="fa fa-download"></i>
											</div>
										</div>
										<div class="card-body">
											     <img src="assets/images/chart/conformance.jpg" alt="Conformance" />
										</div>
									</div>								
							</div>
							<div class="col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
									        <h3 class="card-title">Trend Analysis</h3>
											<div class="card-options">
												<i class="fa fa-download"></i>
											</div>
									</div>
									<div class="card-body">
										<img src="assets/images/chart/trend-analysis.jpg" alt="Trend Analysis" />										
									</div>
								</div>
								
							</div>
						</div>
						<!-- End Row-3 -->	
						
						
						<!-- Row-2 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-body-syndromic">
										<div class="table-responsive">
											  <table class="table table-striped card-table table-vcenter text-nowrap">
													<thead>
														<tr class="custom-tabil-title-text">
															<th>DATE</th>
															<th>CAMERA LOCATION</th>
															<th>% OF PEOPLE WEARING MAKS</th>
															<th>% OF PEOPLE MAINTAINING SOCIAL DISTANCING</th>														
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row" class="custom-tabil-in-text">Dhaka</th>
															<td class="custom-tabil-in-text">Dhaka</td>
															<td class="custom-tabil-in-text">Dhamrai</td>
															<td class="custom-tabil-in-text">120</td>
														</tr>
														<tr>
															<th scope="row" class="custom-tabil-in-text">Dhaka</th>
															<td class="custom-tabil-in-text">Dhaka</td>
															<td class="custom-tabil-in-text">Dhamrai</td>
															<td class="custom-tabil-in-text">120</td>
														</tr>
														<tr>
															<th scope="row" class="custom-tabil-in-text">Dhaka</th>
															<td class="custom-tabil-in-text">Dhaka</td>
															<td class="custom-tabil-in-text">Dhamrai</td>
															<td class="custom-tabil-in-text">120</td>
														</tr>
														<tr>
															<th scope="row" class="custom-tabil-in-text" >Dhaka</th>
															<td class="custom-tabil-in-text">Dhaka</td>
															<td class="custom-tabil-in-text">Dhamrai</td>
															<td class="custom-tabil-in-text">120</td>
														</tr>
														<tr>
															<th scope="row" class="custom-tabil-in-text">Dhaka</th>
															<td class="custom-tabil-in-text">Dhaka</td>
															<td class="custom-tabil-in-text">Dhamrai</td>
															<td class="custom-tabil-in-text">120</td>
														</tr>
														<tr>
														  <th scope="row" class="custom-tabil-in-text">Dhaka</th>
														  <td class="custom-tabil-in-text">Dhaka</td>
														  <td class="custom-tabil-in-text">Dhamrai</td>
														  <td class="custom-tabil-in-text">120</td>
													  </tr>
														<tr>
														  <th scope="row" class="custom-tabil-in-text">Dhaka</th>
														  <td class="custom-tabil-in-text">Dhaka</td>
														  <td class="custom-tabil-in-text">Dhamrai</td>
														  <td class="custom-tabil-in-text">120</td>
													  </tr>
													</tbody>
											  </table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-2 -->
						
					

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

	</body>
</html>