@extends('superadmin.default')


@section('content')
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2 fs-14"></i>Component Management</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="#">Component List</a></li>
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
	                        Component - {{sizeof($components)}}
	                    </h3>
	                </div>
	                <div class="btn btn-list" style="float: right;">
	                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">Create Component</button>
	                </div>
            	</div>
                
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                <table class="table table-responsive-sm table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 200px">Component Name</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th style="width: 200px">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(sizeof($components) > 0)
                        @foreach($components as $component)
                        <tr>
                            <td>{{$component->component_name_beng ?? ''}}</td>
                            
                            <td>
                                @php
                                 $get_title = htmlentities($component->component_title);
                                 if($get_title == null) echo '--';
                                 else echo html_entity_decode($get_title);
                                @endphp
                            </td>
                            <td>
                                @php
                                 $get_desc = htmlentities($component->description_beng);
                                 if($get_desc == null) echo '--';
                                 else echo html_entity_decode($get_desc);
                                @endphp
                            </td>
                            <td>
                               <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#edit_{{$component->component_id}}" style="float: left;margin-right: 5px;">Edit</button>
                                @include('superadmin.component.edit')
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('superadmin.component.create')
</div>
<!-- End Row -->
@endsection
@push('scripts')
<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>

    <script language="javascript" type="text/javascript">
        tinyMCE.init({
            selector: '.custom_textarea',
            height: 150,
            menubar: false,
            setup: function (editor) {
                        editor.on('change', function () {
                            editor.save();
                        });
                    },
            plugins: [
                'advlist autolink lists link image charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code help'
            ],
            toolbar: 'insert | undo redo |  formatselect | bold italic backcolor forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help'
        });

    </script>
@endpush