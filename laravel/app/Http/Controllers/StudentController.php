<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function homepage() {
        $users = User::all();
        return view('home', compact('users'));
    }
    public function create() {
        return view('users.create');
    }
    public function save() {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'date_of_birth' => request('date_of_birth'),
            'status' => request('status'),
        ]);
        return redirect()->route('home')
        ->with('message','User created successfully !!!');
    }
    public function edit($id) {
        $user = User::find(decrypt($id));
        return view('users.edit', compact('user'));
    }
    public function update() {
        $id = decrypt(request('id'));
        User::find($id) -> update([
            'name' => request('name'),
            'email' => request('email'),
            'date_of_birth' => request('date_of_birth'),
            'status' => request('status'),
        ]);
        return redirect()->route('home')
        ->with('message', 'User updated successfully !!!');
    }
    public function delete($id) {
        User::find(decrypt($id))->delete();
        return redirect()->route('home')->with('message', 'User deleted successfully !!!');
    }
}
