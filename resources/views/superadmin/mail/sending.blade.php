@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
     <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Mail Management</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Mail Sending</a></li>
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
	                        Mail - {{$mails->count()}}
	                    </h3>
	                </div>
	            </div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 100px"> <p><label style="cursor:pointer"><input type="checkbox" id="checkAll"/>&nbsp; all</label></p></th>
                            <th style="width: 200px">Name</th>
                            <th>Designation</th>
                            <th>Phone</th>
                            <th>Phone</th>
                            <th>Mail</th>
                        </tr>
                    </thead>
                <form action="{{ route('sending-mail-trigger') }}" method="POST">
                    @csrf
                    <tbody>
                        @if($mails->count()>0)
                        @foreach($mails as $mail)
                        <tr>
                            <td style="text-transform: capitalize;"><input name="userId[]" type="checkbox"  value="{{$mail->id}}"/></td>
                            <td style="text-transform: capitalize;">{{$mail->first_name ?? '--'}} {{$mail->last_name ?? '--'}}</td>
                            <td style="text-transform: capitalize;">
                               {{$mail->designation ?? '--'}}
                            </td>
                            <td style="text-transform: capitalize;">
                                 {{$mail->location ?? '--'}}
                            </td>
                            <td>{{$mail->phone ?? '--'}}</td>
                            <td>{{$mail->mail ?? '--'}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <button style="pull-right" class="btn btn-primary" type="submit">Send Mail</button>
                            </td>
                        </tr>
                    </tfoot>
                </form>
                </table>
               
            </div>
        </div>
    </div>
</div>
<!-- End Row -->
@endsection

@push('scripts')
<script>
    $("#checkAll").change(function () {
        $("input:checkbox").prop('checked', $(this).prop("checked"));
    });
</script>
@endpush

