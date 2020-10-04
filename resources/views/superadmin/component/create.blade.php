<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Create New Component</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form method="post" action="{{route('create-component')}}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Component Name : <span style="color:red">*</span></label>
                        <select class="form-control" name="component_name">
                            @foreach(getComponentName() as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Component Title : <span style="color:red">*</span></label>
                        <textarea class="form-control custom_textarea" rows="5" name="component_title"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Description : <span style="color:red">*</span></label>
                        <textarea class="form-control custom_textarea" rows="5" name="description"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>