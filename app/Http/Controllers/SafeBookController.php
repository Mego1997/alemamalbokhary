<?php

namespace App\Http\Controllers;

use App\Models\SafeBook;
use Illuminate\Http\Request;

class SafeBookController extends Controller
{

    public function index()
    {
        $safes = SafeBook::all();
        return view('backend.safebook.index' , compact('safes'));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SafeBook $safeBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafeBook $safeBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafeBook $safeBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafeBook $safeBook)
    {
        //
    }
}
