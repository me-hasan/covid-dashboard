@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
    
    
</div>
<!--End Page header-->
<div class="row">
    <div class="col-md-8 offset-md-2">
        @include('superadmin.alert-message')

        <div class="card">
            <div class="card-header">
                <div style="width: 100%">
                    <div style="float: left;margin-top: 18px;">
                        <h3 class="panel-title txt-dark">
                            PDF Upload
                        </h3>
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                @endif
                <form method="post" action="{{route('mail-pdf-upload')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="file" name="hpm_pdf"  class="form-control-file">
                                <span>File Max Size : 1MB</span>
                            </div>
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
@endsection
{{-- @push('scripts')


@endpush
 --}}