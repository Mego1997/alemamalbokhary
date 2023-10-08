<?php

namespace App\Http\Controllers;

use App\Models\SafeDonation;
use Illuminate\Http\Request;

class SafeDonationController extends Controller
{

    public function index()
    {
        $safes = SafeDonation::all();
        return view('backend.safedonations.index' , compact('safes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SafeDonation $safeDonation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafeDonation $safeDonation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafeDonation $safeDonation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafeDonation $safeDonation)
    {
        //
    }
}
