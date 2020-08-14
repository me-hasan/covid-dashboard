@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0">User Management</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Edit User</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page"><a href="#">Empty Page</a></li> -->
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
<!--                     <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Password : <span style="color:red">*</span></label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Confirm Password : <span style="color:red">*</span></label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div> -->

                    <button type="submit" class="btn btn-primary">Submit</button>


                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
@endsection
