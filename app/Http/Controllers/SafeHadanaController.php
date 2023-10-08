<?php

namespace App\Http\Controllers;

use App\Models\SafeHadana;
use Illuminate\Http\Request;

class SafeHadanaController extends Controller
{

    public function index()
    {
        $safes = SafeHadana::all();
        return view('backend.safehadana.index' , compact('safes'));

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
    public function show(SafeHadana $safeHadana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafeHadana $safeHadana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafeHadana $safeHadana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafeHadana $safeHadana)
    {
        //
    }
}
