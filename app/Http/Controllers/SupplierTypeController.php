<?php

namespace App\Http\Controllers;

use App\Models\SupplierType;
use Illuminate\Http\Request;

class SupplierTypeController extends Controller
{

    public function index()
    {
        $types = SupplierType::all();
        return view('backend.suppliertype.index', compact('types'));
    }


    public function create()
    {
        return view('backend.suppliertype.create');

    }


    public function store(Request $request)
    {
        $type = new SupplierType;
        $type->name  = $request->name;
        $type->save();
        return redirect()->route('suppliertype.index')->with('message', "Type Added Successfully");

    }


    public function show(SupplierType $supplierType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $type = SupplierType::find($id);
        return view('backend.suppliertype.edit' , compact('type'));
    }


    public function update(Request $request, SupplierType $supplierType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplierType $supplierType)
    {
        //
    }
}
