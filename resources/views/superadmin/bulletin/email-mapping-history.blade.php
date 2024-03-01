@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
     <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>ইমেইল ম্যাপিং ম্যানেজমেন্ট</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">ইমেইল ম্যাপিং এর তালিকা</a></li>
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
	                        ইমেইল ম্যাপিং 
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <a href="{{ route('add-email-mapping') }}" class="btn btn-info">নতুন ইমেইল ম্যাপিং যুক্ত করুন</a>
	                </div>
            	</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered" id="bulletin-history">
                    <thead>
                        <tr>
                            <th>District Name</th>
                            <th>To Address</th>
                            <th>CC Address</th>
                            <th style="width: 180px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if($emails->count()>0)
                        @foreach($emails as $k=> $email)
                        <tr>
                            <td style="text-transform: capitalize;">
                               {{ en2bnTranslation($email->district_name) ?? '--'}}
                            </td>
                            <td style="text-transform: capitalize;">
                               {{ ($email->to_address) ?? '--'}}
                            </td>
                            <td style="text-transform: capitalize;">
                            @foreach($email->ccEmail as $key => $cc)
                                <span>{{$cc->cc_address ?? '--'}}<br></span>
                            @endforeach
                            </td>
                            <td>
                            	<a href="{{ route('email-mapping-edit', ['id'=>$email->id]) }}" class="btn btn-sm btn-primary" style="float: left;margin-right: 5px;" title="View"><i class="fas fa-pen"></i></a>
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


    

