@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>User Management</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Edit User</a></li>
        </ol>
    </div>
    <!-- <div class="page-rightheader">
        <div class="btn btn-list">
            <a href="#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
            <a href="#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
            <a href="#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
        </div>
    </div> -->
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
                <form method="post" action="{{route('edit-user',$user->id)}}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Name : <span style="color:red">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Email :</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">User Type : <span style="color:red">*</span></label>
                        <select name="user_type" class="form-control" data-placeholder="Select Role" required>
                            <option value="cabinet" {{$user->user_type == 'cabinet' ? 'selected' : ''}}>Cabinet</option>
                            <option value="epidemiologist" {{$user->user_type == 'epidemiologist' ? 'selected' : ''}}>Epidemiologist</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Account Level : </label>
                        <select name="account_level" class="form-control account_level" required>
                            <option value="administrative" {{$user->account_level == 'administrative' ? 'selected' : ''}}>Administrative</option>
                            <option value="divisional" {{$user->account_level == 'divisional' ? 'selected' : ''}}>Divisional</option>
                            <option value="district" {{$user->account_level == 'district' ? 'selected' : ''}}>District</option>
                            <option value="upazilla" {{$user->account_level == 'upazilla' ? 'selected' : ''}}>Upazilla</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Role : <span style="color:red">*</span></label>
                        <select name="role" class="form-control" data-placeholder="Select Role" required>
                            @foreach($roles as $role)
                                @php
                                $getUserRoles = $user->getRoleNames()->toArray();
                                if(in_array($role, $getUserRoles)){
                                    $selectAttr = 'selected="selected"';
                                }
                                @endphp
                                <option value="{{$role}}" {{ $selectAttr ?? ''}}>{{$role}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group division-holder">
                        <label for="recipient-name" class="control-label mb-10">Division : <span style="color:red">*</span></label>
                        <select name="division" class="form-control division">
                            <option value="">Select Division</option>
                            @foreach($divisions as $division)
                            <option value="{{$division->division}}" {{$user->division == $division->division ? 'selected' : ''}}>{{$division->division}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group district-holder">
                        <label for="recipient-name" class="control-label mb-10">District :</label>
                        <select name="district" class="form-control district">
                            <option value="">Select District</option>
                            @foreach($districts as $district)
                            <option value="{{$district->district}}" {{$user->district == $district->district ? 'selected' : ''}}>{{$district->district}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group upazilla-holder">
                        <label for="recipient-name" class="control-label mb-10">Upazilla :</label>
                        <select name="upazilla" class="form-control upazilla">
                            <option value="">Select Upazilla</option>
                            @foreach($upazillas as $upazilla)
                            <option value="{{$upazilla->upazila_en}}" {{$user->upazilla == $upazilla->upazila_en ? 'selected' : ''}}>{{$upazilla->upazila_en}}</option>
                            @endforeach
                        </select>
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
