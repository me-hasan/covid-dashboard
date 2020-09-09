<!DOCTYPE html>
<html lang="en" dir="ltr">

@include('administrative.header')

<body class="app sidebar-mini">

<!---Global-loader-->
<div id="global-loader" >
    <img src="{{ asset('assets/images/svgs/loader.svg') }}" alt="loader">
</div>
<!--- End Global-loader-->

<!-- Page -->
<div class="page">
  <div class="page-main">

    @include('administrative.aside')

    <!-- App-Content -->
    <div class="app-content main-content">
      <div class="side-app">

        @include('administrative.sub-header')

        <!--Page header-->
        <div class="page-header">
          <div class="page-leftheader">
            <!--<h4 class="page-title mb-0">Hi! Welcome Back</h4>-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>হোম</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="#">@yield('bread_crumb_active','dashboard')</a></li>
            </ol>
          </div>
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
        <div class="col-md-12 col-sm-12 text-center"> কপিরাইট © ২০২০ <a href="#">কোভিড-১৯, ন্যাশনাল ড্যাশবোর্ড</a>. </div>
      </div>
    </div>
  </footer>
  <!-- End Footer-->

</div>
<!-- End Page -->

<!-- Back to top -->
<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

<!-- Modal Start -->
<div class="modal fade" id="modalContainer" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body" id="modalContent">
        <div class="row">
          <div class="col-md-6 grid-margin stretch-card" id="modalContentLeft"></div>
          <div class="col-md-6 grid-margin stretch-card" id="modalContentRight"></div>
        </div>
        <div id="modal-loading" style="text-align:center;">Loading...</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Ends -->

@include('administrative.footer')

</body>
</html>