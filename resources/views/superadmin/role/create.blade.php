<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Create New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>

            <form method="post" action="{{route('create-role')}}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Name : <span style="color:red">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Permissions : <span style="color:red">*</span></label>
                        <select name="permissions[]" class="form-control select2 select2-multiple" data-placeholder="Select Permission" multiple required>
                            @foreach($permissions as $permission)
                            <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
                        </select>
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