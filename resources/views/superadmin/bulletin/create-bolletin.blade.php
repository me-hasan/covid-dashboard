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
                    <a href="{{ route('news-bulletin-history') }}" class="btn btn-primary pull-right"> বুলেটিন এর তালিকায় ফিরে যান</a>
                    <div style="float: left;margin-top: 18px;">
                        <h3 class="panel-title txt-dark">
                            বুলেটিন
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
                <form method="post" action="{{route('bulletin-generate')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label>তারিখ নির্বাচন করুন </label>
                                <select class="form-control" name="calendar_date">
                                    <option value="">নির্বাচন করুন</option>
                                    @foreach($calendar as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-6">
                        <br>
                            <button type="submit" class="btn btn-primary pull-right"> তৈরী করুন</button>
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