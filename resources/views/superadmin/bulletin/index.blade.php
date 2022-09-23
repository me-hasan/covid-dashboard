@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
     <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>বুলেটিন ম্যানেজমেন্ট</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">বুলেটিন এর তালিকা</a></li>
        </ol>
    </div>
	
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
	                        বুলেটিন 
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create User</button> -->
	                    <a href="{{ route('create-bolletin') }}" class="btn btn-info">নতুন বুলেটিন তৈরী করুন</a>
	                </div>
            	</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered" id="bulletin-history">
                    <thead>
                        <tr>
                            <th style="width: 200px">Date</th>
                            <th>District</th>
                            <th>Recent</th>
                            <th>Last</th>
                            <th>Status</th>
                            <th>Count</th>
                            <th style="width: 180px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($bolletins->count()>0)
                        @foreach($bolletins as $bolletin)
                        <tr>
                            <td style="text-transform: capitalize;">{{$bolletin->weeklyDate->date_ban ?? '--'}}</td>
                            <td style="text-transform: capitalize;">
                               {{ en2bnTranslation($bolletin->district_name) ?? '--'}}
                            </td>
                            <td style="text-transform: capitalize;">
                                 {{$bolletin->weeklyDate->recent_weekly_date ?? '--'}}
                            </td>
                            <td>{{$bolletin->weeklyDate->last_weekly_date  ?? '--'}}</td>
                            <td>@if($bolletin->status == '1') <span class="btn btn-sm label-success">{{ 'পাঠানো হয়েছে' }}</span> @else <span class="btn btn-sm label-warning">{{ 'পাঠানো হয়নি' }}</span> @endif</td>
                            <td>{{$bolletin->count ?? '--'}}</td>
                            <td>
                            	<a href="{{ route('bolletin-pdf-view', ['date_id'=>$bolletin->date_id, 'district'=>$bolletin->change_name]) }}" target="_blank" class="btn btn-sm btn-primary" style="float: left;margin-right: 5px;" title="View"><i class="fas fa-file-pdf"></i></a>
                            	<a href="{{ route('bolletin-pdf-send-email', ['date_id'=>$bolletin->date_id, 'district'=>$bolletin->change_name]) }}" class="btn btn-sm btn-info" style="float: left;margin-right: 5px;" title="Send Email"><i class="far fa-envelope"></i></a>
                            	<a href="{{ route('bolletin-pdf-view', ['date_id'=>$bolletin->date_id, 'district'=>$bolletin->change_name]) }}" target="_blank" class="btn btn-sm btn-success" style="float: left;margin-right: 5px;" title="Download"><i class="fas fa-cloud-download-alt"></i></a>
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


    

