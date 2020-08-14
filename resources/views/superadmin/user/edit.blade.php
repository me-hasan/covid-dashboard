@extends('superadmin.default')


@section('content')
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
                        <label for="recipient-name" class="control-label mb-10">Role : <span style="color:red">*</span></label>
                        <select name="user_type" class="form-control" data-placeholder="Select Role" required>
                            <option value="superadmin" {{$user->user_type == 'superadmin' ? 'selected' : ''}}>Super Admin</option>
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
