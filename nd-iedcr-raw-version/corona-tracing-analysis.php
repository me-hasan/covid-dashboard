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
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Corona Tracing Analysis</a></li>
								</ol>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-6 col-lg-6 col-md-12">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">District Wise No of Contacts with Infected Person</h3>											
										</div>
										<div class="card-body">
											     <img src="assets/images/map/map-2.png" alt="District Wise No of Contacts with Infected Person Map" />
										</div>							
									</div>		
										<!-- Row-1.1 -->
										<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-body">
														<div class="row mt-4">
														<div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
															<div class="card-body">
																<h5 class="card-title">Short Note</h5>
																<p class="card-text">Short Description text will place here.</p>
															</div>
														</div>
													</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Row-Row-1.1  -->						
							</div>
														
							<div class="col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header">
											<div class="card-options">
												<i class="fa fa-table mr-2 text-success"></i>
												<i class="fa fa-download text-danger"></i>
											</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="test-rate-new">
												<thead>
													<tr>
														<th></th>
													    <th height="15px"></th>
													    <th height="15px"></th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row"><h1 class="text-success">4 Meter</h1></th>
													    <th rowspan="2" scope="row" class="border-left border-wd-2"></th>
													    <th scope="row"><h1 class="text-success">7 Minute</h1></th>
													</tr>
													
													<tr>
														<th scope="row"><h4 class="text-success-new">Average Contact Distance</h4></th>
													    <th scope="row"><h4 class="text-success-new">Average Contact Distance</h4></th>
													</tr>
													<tr>
														<th scope="row"></th>
													    <th scope="row" height="15px"></th>
													    <th scope="row" height="15px"></th>
													</tr>
												</tbody>
										  </table>
										</div>										
									</div>
								</div>
									<!-- Row-1.1 -->
										<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-body">
														<div class="row mt-4">
														<div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
															<div class="card-body">
																<h5 class="card-title">Short Note</h5>
																<p class="card-text">Short Description text will place here.</p>
															</div>
														</div>
													</div>
													</div>
												</div>
											</div>
										</div>
									<!-- End Row-Row-1.1  -->	
								<div class="card">
									<div class="card-header">
									       <h3 class="card-title">Top 10 Districts with Highest Contacts with Infected Person</h3>	
										   <div class="card-options">
												<i class="fa fa-download text-danger"></i>
											</div>
									</div>
									<div class="card-body">
										<img src="assets/images/chart/corona-tracing-analysis-chart.jpg" alt="Top 10 Districts with Highest Contacts with Infected Person Chart" />
									</div>
								</div>
									<!-- Row-1.1 -->
										<div class="row">
											<div class="col-md-12">
												<div class="card">
													<div class="card-body">
														<div class="row mt-4">
														<div class="col-xl-9 col-lg-6 col-md-6 col-xm-12">
															<div class="card-body">
																<h5 class="card-title">Short Note</h5>
																<p class="card-text">Short Description text will place here.</p>
															</div>
														</div>
													</div>
													</div>
												</div>
											</div>
										</div>
								    <!-- End Row-Row-1.1  -->	
							</div>
						</div>
						<!-- End Row-1 -->		
						
						

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