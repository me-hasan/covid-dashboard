@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
     <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Mail Management</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Mail List</a></li>
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
	                        Mail - {{$mails->count()}}
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create User</button> -->
	                    <a href="mail/create" class="btn btn-info">Create Mail</a>
	                </div>
            	</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 200px">Name</th>
                            <th>Designation</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Mail</th>
                            <th>Status</th>
                            <th style="width: 150px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($mails->count()>0)
                        @foreach($mails as $mail)
                        <tr>
                            <td style="text-transform: capitalize;">{{$mail->first_name ?? '--'}} {{$mail->last_name ?? '--'}}</td>
                            <td style="text-transform: capitalize;">
                               {{$mail->designation ?? '--'}}
                            </td>
                            <td style="text-transform: capitalize;">
                                 {{$mail->location ?? '--'}}
                            </td>
                            <td>{{$mail->phone ?? '--'}}</td>
                            <td>{{$mail->mail ?? '--'}}</td>
                            <td>@if($mail->is_active == '1') <span class="btn btn-sm label-success">{{ 'Active' }}</span> @else <span class="btn btn-sm label-warning">{{ 'Inactive' }}</span> @endif</td>
                            <td>
                            	<a href="mail/edit/{{$mail->id}}" class="btn btn-sm btn-info" style="float: left;margin-right: 5px;">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
                {{ $mails->links() }}
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
@endsection