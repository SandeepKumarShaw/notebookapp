@extends('admin.layouts.admin')
@section('content')
    <h1>Admin</h1>
    <a class="btn btn-success" href="{{ route('role.create') }}">Create Roles</a>
    <table class="table">
        <tr>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @forelse($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->description }}</td>
                <td>
                    <a class="btn btn-sm btn-info" href="{{ route('role.edit', $role->id) }}">Edit</a>
                    <form action="{{ route('role.destroy', $role->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>No Roles</td>
            </tr>
        @endforelse
    </table>
@endsection