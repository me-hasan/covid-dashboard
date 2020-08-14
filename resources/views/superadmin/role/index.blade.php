@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">
		<h4 class="page-title mb-0">Role Management</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>Role List</a></li>
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
    <div class="col-md-12">
    	@include('superadmin.alert-message')
        <div class="card">
            <div class="card-header">
            	<div style="width: 100%">
            		<div style="float: left;margin-top: 18px;">
	                    <h3 class="panel-title txt-dark">
	                        Role - {{$roles->count()}}
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create Role</button>
	                    <!-- <a href="role/create" class="btn btn-info">Create Role</a> -->
	                </div>
            	</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 200px">Name</th>
                            <th>Permissions</th>
                            <th style="width: 200px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($roles->count()>0)
                        @foreach($roles as $role)
                        <tr>
                            <td>{{$role->name ?? ''}}</td>
                            <td>
                               @if($role->permissions)
                               @foreach($role->permissions as $permission)
                               <span class="label label-success mb-1" style="display:inline-block;">{{$permission->name ?? ''}}</span>
                               @endforeach
                               @endif
                            </td>
                            <td>
                            	<button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_{{$role->id}}" style="float: left;margin-right: 5px;">Edit</button>
                                @include('superadmin.role.edit')
                                <form action="role/{{$role->id}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure you want to delete this role?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('superadmin.role.create')
</div>
<!-- End Row -->
@endsection