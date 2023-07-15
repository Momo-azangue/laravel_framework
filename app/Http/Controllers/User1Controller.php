<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User1;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    public function index()
{
    $users = User1::all();
    return view('index', compact('users'));
}

public function create()
{
    return view('create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
    ]);

    $user = new User1;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return redirect('/user1s')->with('success', 'User created successfully');
}
public function show($id)
{    $user = User1::findOrfail($id);

    return view('show', compact('user'));
}

public function edit(User1 $user)
{
    return view('edit', compact('user'));
}

public function update(Request $request, User1 $user)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $user->id,
    ]);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->save();

    return redirect('/user1s')->with('success', 'User updated successfully');
}


public function delete(User1 $user)
{
    $user->delete();

    return redirect('/user1s')->with('success', 'User deleted successfully');
}

}
