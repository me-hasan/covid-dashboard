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
                    <a href="{{ route('email-mapping-history') }}" class="btn btn-info pull-right"> ইমেইল ম্যাপিং এর তালিকায় ফিরে যান</a>
                    <div style="float: left;margin-top: 18px;">
                        <h3 class="panel-title txt-dark">
                            Email Mapping Update
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
                <form method="post" action="{{route('email-mapping-update', ['id'=>$id])}}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                            <label>জেলা নির্বাচন করুন </label>
                                <select class="form-control" name="district_name" disabled>
                                    <option value="">নির্বাচন করুন</option>
                                    @foreach($districts as $key => $value)
                                        <option {{ ($existData->district_name == $key)?"selected='selected'":""  }} value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                               
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>টু ইমেইল</label>
                                
                                <input type="email" value="{{ $existData->to_address }}" name="to_address" class="form-control" />
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                               
                                <div class="input_fields_wrap">
                                    @foreach($existData->ccEmail as $key => $cc)
                                    <div><input type="email" value="{{ $cc->cc_address }}" class="form-control" required name="cc_address[]"/><a href="#" class="remove_field">মুছে ফেলুন</a></div><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                   </div>
                    <div class="row">
                        <div class="col-7">
                                <div class="form-group">
                                <a class="add_field_button btn btn-info  pull-right">নতুন যুক্ত করুন</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">হাল নাগাদ করুন</button>
                        </div>
                        <div class="col-6">
                            <a href="{{ route('email-mapping-history') }}" type="submit" class="btn btn-warning pull-right">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        (function($){
                var max_fields      = 10; //maximum input boxes allowed
                var wrapper         = $(".input_fields_wrap"); //Fields wrapper
                var add_button      = $(".add_field_button"); //Add button ID
                
                var x = 1; //initlal text box count
                $(add_button).on("click",function(e){ //on add input button click
                    e.preventDefault();
                    if(x < max_fields){ //max input box allowed
                        x++; //text box increment
                        $(wrapper).append('<div><input type="email" class="form-control" required name="cc_address[]"/><a href="#" class="remove_field">মুছে ফেলুন</a></div><br>'); //add input box
                    }
                });
                
                $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                    e.preventDefault(); $(this).parent('div').remove(); x--;
                })
        })(jQuery);
    </script>
@endsection

   

