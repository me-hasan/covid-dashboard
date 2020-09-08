@extends('administrative.default')
@section('content')

    @if(count($_requestedFrameData) > 0)
        <iframe width="{!! $_requestedFrameData['width'] !!}" height="{!! $_requestedFrameData['height'] !!}" src="{!! $_requestedFrameData['URL'] !!}" frameborder="0" allowFullScreen="true"></iframe>
    @else
        <h2>Sorry, no content found. Please try again or contact with webmaster.</h2>
    @endif

@endsection
