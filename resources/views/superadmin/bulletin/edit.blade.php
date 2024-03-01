@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Mail Management</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Edit Mail</a></li>
        </ol>
    </div>
    
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
                            Edit User
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
                <form method="post" action="{{route('edit-mail',$mail->id)}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">First Name : </label>
                        <input type="text" name="first_name" value="{{ $mail->first_name }}" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Last Name : </label>
                        <input type="text" name="last_name" value="{{ $mail->last_name }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Designation : </label>
                        <input type="text" name="designation" value="{{ $mail->designation }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Location : </label>
                        <input type="text" name="location" value="{{ $mail->location }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Phone : </label>
                        <input type="text" name="phone" value="{{ $mail->phone }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Email : <span style="color:red">*</span></label>
                        <input type="email" name="mail" value="{{ $mail->mail }}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Is Active : <span style="color:red">*</span></label>
                        <input type="checkbox" name="is_active"  value="1" checked>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
        var account_level = $(".account_level").val();
        checkAccountLevel(account_level);
    });
    function checkAccountLevel(account_level){
        console.log(account_level);
        if(account_level == 'administrative' || account_level == ''){
            $('.division, .district, .upazilla').val("");
            $('.division-holder, .district-holder, .upazilla-holder').hide();
        }else if(account_level == 'divisional'){
            $('.district, .upazilla').val("");
            $('.district-holder, .upazilla-holder').hide();
            $('.division-holder').show();
        }else if(account_level == 'district'){
            $('.upazilla').val("");
            $('.upazilla-holder').hide();
            $('.division-holder, .district-holder').show();
        }else{
            $('.division-holder, .district-holder, .upazilla-holder').show();
        }
    }
    $('.account_level').change(function(e){
        var account_level = $(".account_level").val();
        checkAccountLevel(account_level);
    });
    $('.division').change(function(e){
        var division = $(".division").val();
        // console.log(division);
        $.ajax({
            type: 'GET',
            url: '{{route('get-district-from-division')}}',
            dataType: 'json',
            data: {division: division},
            success: function (data) {
                console.log(data);
                if (data.status == 1) {
                    $('.district').empty();
                    html = '<option value="">Select District</option>';
                    for (var i = 0; i < data.data.length; i++) {
                        html += '<option value=' + data.data[i].district + '>' + data.data[i].district + '</option>';
                    }
                    $('.district').append(html);
                }
            },
            error: function (data) {

            }
        });
    
    });

    $('.district').change(function(e){
        var district = $(".district").val();
        // console.log(district);
        $.ajax({
            type: 'GET',
            url: '{{route('get-upazilla-from-district')}}',
            dataType: 'json',
            data: {district: district},
            success: function (data) {
                // console.log(data);
                if (data.status == 1) {
                    $('.upazilla').empty();
                    for (var i = 0; i < data.data.length; i++) {
                        $('.upazilla').append('<option value=' + data.data[i].upazila_en + '>' + data.data[i].upazila_en + '</option>');
                    }
                }
            },
            error: function (data) {

            }
        });
    
    });

</script>
@endpush
