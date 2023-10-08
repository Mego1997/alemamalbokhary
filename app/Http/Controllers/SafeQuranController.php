<?php

namespace App\Http\Controllers;

use App\Models\SafeQuran;
use Illuminate\Http\Request;

class SafeQuranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $safes = SafeQuran::all();
        return view('backend.safequran.index' , compact('safes'));
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
    public function show(SafeQuran $safeQuran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafeQuran $safeQuran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafeQuran $safeQuran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafeQuran $safeQuran)
    {
        //
    }
}
