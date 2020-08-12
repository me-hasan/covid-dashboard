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
									<li class="breadcrumb-item active" aria-current="page"><a href="#">Doubling Time & Growth Rate Analysis</a></li>
								</ol>
							</div>
						</div>
						<!--End Page header-->
						<iframe id="rtIframeData" width="100%" height="2500" src="http://dev.pipilika.com:9900/" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>
													<?php /*
						<!-- Row-1 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">District Wise Doublling time and Growth Rate</h3>
										<div class="card-options">
											<i class="fa fa-table mr-2"></i>
											<i class="fa fa-download"></i>
										</div>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-4">
												<img src="assets/images/map/map-1.png" alt="Geo Location Map" />
											</div>
											<div class="col-lg-8">
										       <img src="assets/images/chart/doubling-time-growth-rate-analysis.jpg" alt="Doubling Time & Growth Rate Analysis Chart" />
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
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-header-doubling">									
										<div class="card-options">
											<i class="fa fa-download"></i>
										</div>
									</div>
										<h3 class="card-title card-title-center">Growth Rate Comparison</h3>
									<div class="card-body">
										<img src="assets/images/chart/growth-rate-comparison.jpg" alt="Growth Rate Comparison" />
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-3 -->
						
						<!-- Row-4 -->
						<div class="row">
							<div class="col-xl-12 col-md-12">
								<div class="card">
									<div class="card-header-doubling">									
										<div class="card-options">
											<i class="fa fa-download"></i>
										</div>
									</div>
										<h3 class="card-title card-title-center">Doublling Time Comparison</h3>
									<div class="card-body">
										<img src="assets/images/chart/doubling-time-comparison.jpg" alt="Doublling Time Comparison" />
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-4 -->						*/ ?>

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