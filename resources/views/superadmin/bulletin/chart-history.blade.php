@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
     <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>চার্ট ম্যানেজমেন্ট</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">চার্ট এর তালিকা</a></li>
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
	                        চার্ট 
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <a href="{{ route('bulletin-chart') }}" class="btn btn-info">নতুন চার্ট আপলোড করুন</a>
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
                            <th>Status</th>
                            <th style="width: 180px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($charts->count()>0)
                        @foreach($charts as $chart)
                        <tr>
                            <td style="text-transform: capitalize;">{{$chart->weeklyDate->date_ban ?? '--'}}</td>
                            <td style="text-transform: capitalize;">
                               {{ en2bnTranslation($chart->change_name) ?? '--'}}
                            </td>
                            <td>@if($chart->status == '1') <span class="btn btn-sm label-success">{{ 'পরিবর্তন যোগ্য' }}</span> @else <span class="btn btn-sm label-warning">{{ 'পরিবর্তন সম্ভব নয়' }}</span> @endif</td>
                            <td>
                            	<a href="{{ ($chart->status == '1')? route('chart-history-view-edit', ['id'=>$chart->id]):'#' }}" class="btn btn-sm {{ ($chart->status == '1')?'btn-primary':'btn-default' }}" style="float: left;margin-right: 5px;" title="View"><i class="fas fa-eye"></i></a>
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


    

