<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\treeDonation;
use App\Models\Post;
use App\Models\User;

class DonasiPohonController extends Controller
{
    public function donasiPohon()
    {
        return view('donasiPohon', [
            "user" => User::all()
        ]);
    }
    public function donasiPohonStore(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'address' => 'required',
            'jenisPohon' => 'required'
        ]);
        // dd('berhasil');
        treeDonation::create($validatedData);
        return redirect('/donasi')->with('success', 'Donated');
    }
}
