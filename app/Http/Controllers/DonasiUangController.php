<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\moneyDonation;
use App\Models\Post;
use App\Models\User;

class DonasiUangController extends Controller
{
    public function donasiUang()
    {
        return view('donasiUang', [
            "user" => User::all()
        ]);
    }
    public function donasiUangStore(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'donasi' => 'required'
        ]);
        // dd('berhasil');
        moneyDonation::create($validatedData);
        return redirect('/donasi')->with('success', 'Donated');
    }
}
