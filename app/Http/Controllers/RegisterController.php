<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'username' => 'required|max:255|min:2',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'terms' => 'required',
            'user_role' => 'required|in:1,2', 
        ]);

        $attributes['password'] = bcrypt($attributes['password']); 

        $attributes['role'] = $attributes['user_role'];

        unset($attributes['user_role']);

        $user = User::create($attributes);

        // auth()->login($user);

        return redirect()->route('login');
    }
}
