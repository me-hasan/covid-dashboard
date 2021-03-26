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

<div class="row">
 		
            @foreach ($number_blocks as $block)
            <div class="col-md-4">
                <div class="info-box">
                        <span class="info-box-icon bg-red"
                              style="display:flex; flex-direction: column; justify-content: center;">
                            <i class="fa fa-chart-line"></i>
                        </span>

                    <div class="info-box-content">
                        <span class="info-box-text">{{ $block['title'] }}</span>
						<br>
                       <b> <span class="info-box-number">{{ $block['number'] }}</span> </b>
                    </div>
                </div>
            </div>
            @endforeach
        

        <div class="row">
            @foreach ($list_blocks as $block)
                <div class="col-md-6">
                    <h3>{{ $block['title'] }}</h3>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Last login at</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($block['entries'] as $entry)
                            <tr>
                                <td>{{ $entry->name }}</td>
                                <td>{{ $entry->email }}</td>
                                <td>{{ $entry->last_login_at }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">{{ __('No entries found') }}</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>

</div>

@endsection