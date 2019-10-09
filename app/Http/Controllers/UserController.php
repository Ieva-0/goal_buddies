<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store()
    {
        $user = new \App\User();
        $user->email = request('email');
        $user->name = request('name');
        $user->password = request('password');
        $user->remember_token = request('remember_token');
        $user->save();
        return redirect('/user');
    }

    public function new_user()
    {
        $user = \App\User::latest()->first();
        return view('user', compact('user'));
    }
}
