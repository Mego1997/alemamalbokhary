<?php

namespace App\Http\Controllers;

use App\Models\SafeClothes;
use Illuminate\Http\Request;

class SafeClothesController extends Controller
{
    
    public function index()
    {

        $safes = SafeClothes::all();
        return view('backend.safeclothes.index' , compact('safes'));

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
    public function show(SafeClothes $safeClothes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SafeClothes $safeClothes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SafeClothes $safeClothes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SafeClothes $safeClothes)
    {
        //
    }
}
