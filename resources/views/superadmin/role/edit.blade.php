<div class="modal fade" id="edit_{{$role->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Update Role - {{$role->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{route('edit-role',$role->id)}}">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label mb-10">Name : <span style="color:red">*</span></label>
                        <input type="text" name="name" value="{{$role->name}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <select name="permissions[]" class="form-control select2 select2-multiple" data-placeholder="Select Permission" multiple required id="permission">
                            @php
                            $getRolePermissions = $role->permissions->pluck('id')->toArray();
                            @endphp
                        @foreach($permissions as $permission)
                        @php
                        
                        if(in_array($permission->id, $getRolePermissions)){
                            $selectAttr = 'selected';
                        }else{
                            $selectAttr = '';
                        }
                        @endphp
                        <option value="{{$permission->id}}" {{ $selectAttr}}>{{$permission->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
