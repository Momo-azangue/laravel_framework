<!-- resources/views/users/show.blade.php -->

@extends('layout.app')

@section('content')
        <br>
        <br>
    <h1>User Details</h1>
    <div class="user-details">
        <p><strong>Name:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Created At:</strong> {{ $user->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $user->updated_at }}</p>
    </div>
    <a href="{{ route('user1s.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
    <form action="{{ route('user1s.destroy', $user->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete User</button>
    </form>
@endsection
