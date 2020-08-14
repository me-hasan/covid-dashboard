@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">
		<h4 class="page-title mb-0">User Management</h4>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#"><i class="fe fe-layers mr-2 fs-14"></i>User List</a></li>
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
	                        User - {{$users->count()}}
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create User</button> -->
	                    <a href="user/create" class="btn btn-info">Create User</a>
	                </div>
            	</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 200px">Name</th>
                            <th>Email</th>
<!--                             <th>Mobile</th>
                            <th>Brnach</th> -->
                            <th>User Type</th>
                            <th>Registered Since</th>
                            <th style="width: 200px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($users->count()>0)
                        @foreach($users as $user)
                        <tr>
                            <td style="text-transform: capitalize;">{{$user->name ?? '--'}}</td>
                            <td>{{$user->email ?? '--'}}</td>
<!--                             <td>{{$user->mobile_no ?? '--'}}</td>
                            <td>{{$user->branch != '' ? $user->branch : '--' ?? '--'}}</td> -->
                            <td style="text-transform: capitalize;">

                                <span class="label label-success"> {{$user->user_type ?? '--'}} </span>

                            </td>
                            <td>{{$user->created_at ?? '--'}}</td>
                            <td>
                            	<a href="user/edit/{{$user->id}}" class="btn btn-sm btn-info" style="float: left;margin-right: 5px;">Edit</a>
                                <form action="user/{{$user->id}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-sm btn-warning" onclick="return confirm('Are you sure you want to delete this user?');" {{$user->id == Auth::user()->id ? 'disabled' : ''}}>Delete</button>
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
</div>
<!-- End Row -->
@endsection