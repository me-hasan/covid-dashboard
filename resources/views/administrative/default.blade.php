@include('administrative.header')

<body>
<div class="container-scroller"> 
  @include('administrative.sub-header')
  <div class="container-fluid page-body-wrapper"> 
    @include('administrative.aside')
    @yield('content')
  </div>
  <!-- page-body-wrapper ends --> 
</div>
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
<!-- container-scroller --> 

@include('administrative.footer')