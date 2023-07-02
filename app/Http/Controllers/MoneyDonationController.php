<?php

namespace App\Http\Controllers;

use App\Models\moneyDonation;
use App\Http\Requests\StoremoneyDonationRequest;
use App\Http\Requests\UpdatemoneyDonationRequest;

class MoneyDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremoneyDonationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremoneyDonationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\moneyDonation  $moneyDonation
     * @return \Illuminate\Http\Response
     */
    public function show(moneyDonation $moneyDonation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\moneyDonation  $moneyDonation
     * @return \Illuminate\Http\Response
     */
    public function edit(moneyDonation $moneyDonation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemoneyDonationRequest  $request
     * @param  \App\Models\moneyDonation  $moneyDonation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemoneyDonationRequest $request, moneyDonation $moneyDonation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\moneyDonation  $moneyDonation
     * @return \Illuminate\Http\Response
     */
    public function destroy(moneyDonation $moneyDonation)
    {
        //
    }
}
