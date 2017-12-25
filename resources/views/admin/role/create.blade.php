@extends('admin.layouts.admin')
@section('content')
    <h1>Create Roles</h1>
            <form action="{{ route('role.store') }}" method="POST" role="form">
                {{ csrf_field() }}
            	<legend>Form Title</legend>

            	<div class="form-group">
            		<label for="name">Name</label>
            		<input type="text" class="form-control" name="name" id="" placeholder="Name of Role">
            	</div>
                <div class="form-group">
                    <label for="name">Display Name</label>
                    <input type="text" class="form-control" name="display_name" id="" placeholder="Name of Display Name">
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" class="form-control" name="description" id="" placeholder="Enter Description">
                </div>
                <div class="form-group text-left">
                    <h3>Permissions</h3>
                    @foreach($permissions as $permission)
                        <input type="checkbox" class="" name="permission[]" value="{{ $permission->id }}">
                        {{ $permission->name }} <br/>
                    @endforeach
                </div>
            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>

@endsection