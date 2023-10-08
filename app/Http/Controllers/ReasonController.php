<?php

namespace App\Http\Controllers;


use App\Models\Reasone;
use Illuminate\Http\Request;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $reasons =Reasone::all();
        return view('backend.reasons.index',compact('reasons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.reasons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reason = new Reasone();
        $reason->reason  = $request->name;
        $reason->save();
        return redirect()->route('reasons.index')->with('message', "reason Added Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Reasone $resone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $resone = Reasone::find($id);

        return view('backend.reasons.edit', compact('resone'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $resone = Reasone::find($id);
        $resone->reason  = $request->name;
        $resone->save();

        return redirect()->route('reasons.index')->with('message', "تم التعديل بنجاح");
    }


    public function destroy($id)
    {
        $resone = Reasone::find($id)->delete();
        return redirect()->route('reasons.index')->with('message', "تم الحذف بنجاح");


    }
}
