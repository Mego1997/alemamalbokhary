<?php

namespace App\Http\Controllers;

use App\Models\Requested_price;
use Illuminate\Http\Request;

class RequestedPriceController extends Controller
{
    
    public function index()
    {
        $types = Requested_price::all();
        return view('backend.requested_prices.index', compact('types'));
    }

   
    public function create()
    {
        return view('backend.requested_prices.create');

    }

   
    public function store(Request $request)
    {
        $type = new Requested_price();
        $type->price  = $request->name;
        $type->save();
        return redirect()->route('requested_prices.index')->with('message', " تم الإضافة بنجاح");

    }

    /**
     * Display the specified resource.
     */
    public function show(Requested_price $requested_price)
    {
        //
    }

   
    public function edit($id)
    {
        $type = Requested_price::find($id);
        return view('backend.requested_prices.edit', compact('type'));

    }

    
    public function update(Request $request, $id)
    {
        $type = Requested_price::find($id);
        $type->price  = $request->name;
        $type->save();
        return redirect()->route('requested_prices.index')->with('message', " تم التعديل بنجاح");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $type = Requested_price::find($id)->delete();
        return redirect()->route('requested_prices.index')->with('message', " تم الحذف بنجاح");

    }
}
