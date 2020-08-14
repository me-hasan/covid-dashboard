@extends('iedcr.default')
@section('bread_crumb_active','Rt Analysis')
@section('content')

    <iframe id="rtIframeData" width="100%" height="2500" src="http://dev.pipilika.com:9899/" style="overflow-y: hidden" frameborder="0" allowFullScreen="true"></iframe>

@endsection

@section('scripts')
    <script type="text/javascript">
        $('#rtIframeData').load(function(){
            $('#rtIframeData').contents().find('nav').hide();
            $('#rtIframeData').contents().find('#toppanel').hide();
        });
    </script>


@endsection
