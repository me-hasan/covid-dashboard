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
                       <div class="num-style">
				            <span>{{ $block['number'] }}</span> 
                       </div>
                    </div>
                </div>
            </div>
            @endforeach
     </div>

        <div class="row">
            @foreach ($list_blocks as $block)
                <div class="col-md-<?php echo (0 == $block['id'])?'8':'4' ?>">
                    <h3>{{ $block['title'] }}</h3>
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            @if(0 == $block['id'])<th>Last login at</th>@endif
                            @if(0 == $block['id'])<th>Last Stay</th>@endif
                            @if(0 == $block['id'])<th>Login Count</th>@endif
                            @if(0 == $block['id'])<th>Action</th>@endif
                        </tr>
                        </thead>
                        <tbody>
                            @forelse($block['entries'] as $k=> $entry)
                                <tr>
                                    <td><i class="ion-checkmark-circled  {{ (0 == $block['id'])? 'text-success' : 'text-dafault' }} fs-12"></i> {{ $entry->name }}</td>
                                    <td>{{ $entry->email }}</td>
                                    @if(0 == $block['id'])<td>{{ ($entry->last_login_at !== null) ? Carbon\Carbon::parse($entry->last_login_at)->diffForHumans($currentTimeStamp) : 'Never Logged In' }}</td>@endif
                                    @if(0 == $block['id'])<td>{{ Carbon\Carbon::parse($entry->last_login_at)->diffInMinutes($entry->last_logout_at,true) }} Minutes</td>@endif
                                    @if(0 == $block['id'])<td>{{ $entry->logged_count ?? 'No' }}</td>@endif
                                    @if(0 == $block['id'])<td>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalScrollable<?php echo $k; ?>">
                                        Detail
                                        </button>
                                    </td>@endif
                                </tr>
                            @empty
                            
                                <tr>
                                    <td colspan="2">{{ __('No entries found') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $block['entries']->links() }}
                </div>

                <!-- Modal -->
                @foreach($list_blocks[0]['entries'] as $key => $value)
                    <div class="modal fade" id="exampleModalScrollable<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">User login details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @if(!empty($value))
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Login Time</th>
                                                <th>Logout Time</th>
                                                <th>Stay Time</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($value->getVisitor as $key => $val)
                                            <tr>
                                                <td>{{ Carbon\Carbon::parse($val->login_at)->format('d M, Y  g:i A') }}</td>
                                                <td>{{ Carbon\Carbon::parse($val->logout_at)->format('d M, Y  g:i A') }}</td>
                                                <td>{{ ($val->login_at !== null) ? Carbon\Carbon::parse($val->login_at)->diffInMinutes($val->logout_at) . ' Minutes' : 'Never Logged In' }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                 <p>No Data Found!</p>
                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>

</div>

@endsection