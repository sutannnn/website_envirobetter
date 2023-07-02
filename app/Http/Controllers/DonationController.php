<?php

namespace App\Http\Controllers;

use App\Models\treeDonation;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function tim1()
    {
        return view('Tim1', [
            "donasi" => treeDonation::all(),
            "post" => Post::all(),
            "user" => User::all()
        ]);
    }

    public function home()
    {
        return view('home', [
            "donasi" => treeDonation::all(),
            "posts" => Post::all(),
            "user" => User::all()
        ]);
    }

    // public function show(Post $post)
    // {
    //     return view('post', [
    //         "title" => "Single Post",
    //         "user" => User::all(),
    //         "donasi" => treeDonation::all(),
    //         "post" => $post
    //     ]);
    // }

    public function account()
    {
        return view('account', [
            "user" => User::all(),
            "image" => "profil.webp"
        ]);
    }
    public function donasi()
    {
        return view('donasi', [
            "user" => User::all()
        ]);
    }
}
