<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('iedcr.header')

<body class="app sidebar-mini">

<!---Global-loader-->
<div id="global-loader" >
    <img src="{{ asset('assets/images/svgs/loader.svg') }}" alt="loader">
</div>
<!--- End Global-loader-->

<!-- Page -->
<div class="page">
  <div class="page-main">

    @include('iedcr.aside')

    <!-- App-Content -->
    <div class="app-content main-content">
      <div class="side-app">

        @include('iedcr.sub-header')

        <!--Page header-->
        <div class="page-header">
          <div class="page-leftheader">
            <!--<h4 class="page-title mb-0">Hi! Welcome Back</h4>-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14 b1"></i>হোম</a></li>
              <li class="breadcrumb-item active b1" aria-current="page"><a href="#">@yield('bread_crumb_active','ড্যাশবোর্ড')</a></li>
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

        @yield('content')

      </div>
    </div>
    <!-- End app-content-->
  </div>

  <!--Footer-->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-md-12 col-sm-12 text-center"> Copyright © 2020 <a href="#">COVID-19, National Dashboard</a>. All rights reserved. </div>
      </div>
    </div>
  </footer>
  <!-- End Footer-->

</div>
<!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

@include('iedcr.footer')
</body>
</html>
