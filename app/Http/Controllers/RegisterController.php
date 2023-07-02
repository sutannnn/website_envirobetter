<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:10|max:255|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/form')->with('success', 'Registration successfull! Please login');
    }
}
