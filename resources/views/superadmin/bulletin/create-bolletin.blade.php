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
                    <a href="{{ route('news-bulletin-history') }}" class="btn btn-info pull-right"> বুলেটিন এর তালিকায় ফিরে যান</a>
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
                        <div class="col-4">
                            <div class="form-group">
                            <label>তারিখ নির্বাচন করুন </label>
                                <select required class="form-control select2" name="calendar_date" onchange="checkDistrict()" id="calendar_date">
                                    <option value="">নির্বাচন করুন</option>
                                    @foreach($calendar as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                            <label>জেলা নির্বাচন করুন </label>
                                <select required multiple class="form-control select2" name="district_name[]" onchange="checkUpload()" id="district_name">
                                    {{-- <option value="">নির্বাচন করুন</option>
                                    @foreach($districts as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach --}}
                                </select>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="submitButton"></div>
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
        
        function checkUpload()
        {
            var date_id = $('#calendar_date').val();
            var district_name = $('#district_name').val();
            //$('#submitButton').html('');
            $.ajax({
                url: "{{ route('check.bulletin.chart.upload') }}",
                type: 'POST',
                data: {"_token": "{{ csrf_token() }}","date_id": date_id, "district_name": district_name},
                success: function(data) {
                $('#submitButton').html(data);
            }
            });
        };
    </script>
@endsection

   

