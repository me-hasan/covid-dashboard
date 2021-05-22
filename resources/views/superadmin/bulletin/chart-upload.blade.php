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
                            Bulletin Chart Upload
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
                <form method="post" action="{{route('bulletin-chart-upload')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label>তারিখ নির্বাচন করুন </label>
                                <select class="form-control" name="calendar_date" onchange="checkDistrict()" id="calendar_date">
                                    <option value="">নির্বাচন করুন</option>
                                    @foreach($calendar as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                            <label>জেলা নির্বাচন করুন </label>
                                <select class="form-control select2" name="district_name" id="district_name">
                                    <option value="">নির্বাচন করুন</option>
                                    {{-- @foreach($districts as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach --}}
                                </select>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>১. দৈনিক সনাক্তের সংখ্যা</label>
                                <input type="file" name="daily_effected"  class="form-control-file">
                                <span>File Max Size : 1MB</span>
                            </div>
                        </div>
                   </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>২. জেলা ভিত্তিক দৈনিক পরীক্ষা বিবেচনায় সনাক্তের হার</label>
                                <input type="file" name="district_chart"  class="form-control-file">
                                <span>File Max Size : 1MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label>৩. ম্যাপ</label>
                                <input type="file" name="map"  class="form-control-file">
                                <span>File Max Size : 1MB</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('chart-history') }}" type="submit" class="btn btn-warning pull-right">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->


    <script>
        function checkDistrict()
        {
            var date_id = $('#calendar_date').val();
            $('#district_name').html('').select2({data: [{id: '', text: ''}]});
            $.ajax({
                url: "{{ route('check.bulletin.district.list') }}",
                type: 'POST',
                data: {"_token": "{{ csrf_token() }}","date_id": date_id},
                success: function(data) {
                    $("#district_name").select2({
                        data: data
                    });
                    $('#submitButton').html('');
                }
            });
        };
        
        
    </script>
@endsection
{{-- @push('scripts')


@endpush
 --}}