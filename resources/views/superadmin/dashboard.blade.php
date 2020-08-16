@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
	<div class="page-leftheader">
		<ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Dashboard</a></li>
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
	<div class="col-md-3">
		<div class="info-box">
			<h4>Adimistrative User</h4>
			<div class="num-style">
				<span>{{$administrative_user}}</span>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="info-box">
			<h4>Divisional User</h4>
			<div class="num-style">
				<span>{{$divisional_user}}</span>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="info-box">
			<h4>District User</h4>
			<div class="num-style">
				<span>{{$district_user}}</span>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="info-box">
			<h4>Upazilla User</h4>
			<div class="num-style">
				<span>{{$upazilla_user}}</span>
			</div>
		</div>
	</div>

    <!-- <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                Something ... needs to be put here....
            </div>
        </div>
    </div> -->

</div>
<!-- End Row -->
@endsection