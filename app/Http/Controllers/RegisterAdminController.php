<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterAdminController extends Controller
{
    public function newAdmin()
    {
        return view('newAdmin');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'email' => 'required|min:10|max:255|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ]);
        // dd('berhasil');
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/newAdmin')->with('success', 'Registration successfull! Please login');
    }
}
