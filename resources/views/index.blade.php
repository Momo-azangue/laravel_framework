<!-- resources/views/users/index.blade.php -->
@extends('layout.app')


@section('content')
    <br>
    <br>
    <h1>Users</h1>
    <a href="{{ route('user1s.create') }}" class="btn btn-primary">Create User</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user1s.show', $user->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('user1s.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('user1s.destroy', $user->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
