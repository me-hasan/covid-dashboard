@extends('administrative.default')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            @if(count($_requestedFrameData) > 0)
{{--                <iframe width="<?php echo $_requestedFrameData['width']; ?>" height="<?php echo $_requestedFrameData['height']; ?>" src="<?php echo $_requestedFrameData['URL']; ?>" frameborder="0" allowFullScreen="true"></iframe>--}}
                <iframe width="{!! $_requestedFrameData['width'] !!}" height="{!! $_requestedFrameData['height'] !!}" src="{!! $_requestedFrameData['URL'] !!}" frameborder="0" allowFullScreen="true"></iframe>
            @else
                <h2>Sorry, no content found. Please try again or contact with webmaster.</h2>
            @endif

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020
              </span>
            </div>
        </footer>
        <!-- partial -->
    </div>

@endsection
