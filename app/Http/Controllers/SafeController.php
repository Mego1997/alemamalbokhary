<?php

namespace App\Http\Controllers;

use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\SafeDonation;
use App\Models\SafeHadana;
use App\Models\SafeQuran;
use Illuminate\Http\Request;

class SafeController extends Controller
{

    public function index()
    {
        $safes = Safe::all();
        return view('backend.safe.index' , compact('safes'));
    }

    public function ownerdetails(Request $request)
    {
        return view('backend.ownerdetails');
    }

    public function ownerdetailsfilter(Request $request)
    {
        if($request->safe == '1'){
            $data['Alldetails'] = Safe::whereDate('created_at','>=',$request->from)
                ->whereDate('created_at','<=',$request->to)
                ->get();
            return response()->json($data);
        }elseif($request->safe == '2'){
            $data['Alldetails'] = SafeHadana::whereDate('created_at','>=',$request->from)
                ->whereDate('created_at','<=',$request->to)
                ->get();
            return response()->json($data);
        }elseif($request->safe == '3') {
            $data['Alldetails'] = SafeBook::whereDate('created_at','>=',$request->from)
                ->whereDate('created_at','<=',$request->to)
                ->get();
            return response()->json($data);
        }elseif($request->safe == '4') {
            $data['Alldetails'] = SafeClothes::whereDate('created_at','>=',$request->from)
                ->whereDate('created_at','<=',$request->to)
                ->get();
            return response()->json($data);
        }
        elseif($request->safe == '5') {
            $data['Alldetails'] = SafeDonation::whereDate('created_at','>=',$request->from)
                ->whereDate('created_at','<=',$request->to)
                ->get();
            return response()->json($data);
        }elseif($request->safe == '6') {
            $data['Alldetails'] = SafeQuran::whereDate('created_at','>=',$request->from)
                ->whereDate('created_at','<=',$request->to)
                ->get();
            return response()->json($data);
        }

    }


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
    public function show(Safe $safe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Safe $safe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Safe $safe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Safe $safe)
    {
        //
    }
}
