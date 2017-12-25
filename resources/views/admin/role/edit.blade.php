@extends('admin.layouts.admin')
@section('content')
    <h1>Edit Roles</h1>
    <form action="{{ route('role.update', $role->id) }}" method="POST" role="form">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <legend>Form Title</legend>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="" value="{{ $role->name }}" placeholder="Name of Role">
        </div>
        <div class="form-group">
            <label for="name">Display Name</label>
            <input type="text" class="form-control" name="display_name" id="" value="{{ $role->display_name }}" placeholder="Name of Display Name">
        </div>
        <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control" name="description" id="" value="{{ $role->description }}" placeholder="Enter Description">
        </div>
        <div class="form-group text-left">
            <h3>Permissions</h3>
            @foreach($permissions as $permission)
                <input type="checkbox" {{ in_array($permission->id, $role_permissions)?"checked":"" }} class="" name="permission[]" value="{{ $permission->id }}">
                {{ $permission->name }} <br/>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection