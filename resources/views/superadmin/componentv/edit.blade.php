
<div class="modal fade" id="edit_{{$component->component_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document" style="max-width: 650px; !important">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Update Component </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{route('edit-component',$component->component_id)}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">উপাদানের নাম : <span style="color:red">*</span></label>
                        <select class="form-control" name="component_id">
                            @foreach(getComponentName() as $key => $value)
                            <option value="{{$key}}" {{ $key == $component->component_id ? 'selected' : '' }}>{{$key.'-'.$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">শিরোনাম : <span style="color:red">*</span></label>
                        <textarea class="form-control custom_textarea" rows="5" name="component_name_beng">{{$component->component_name_beng}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">বর্ননা : <span style="color:red">*</span></label>
                        <textarea class="form-control custom_textarea" rows="5" name="description">{{$component->description_beng}}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">বাতিল</button>
                    <button type="submit" class="btn btn-primary">পরিবর্তন</button>
                </div>
            </form>
        </div>
    </div>
</div>

