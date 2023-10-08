<?php

namespace App\Http\Controllers;

use App\Models\ShopInventory;
use Illuminate\Http\Request;

class ShopInventoryController extends Controller
{
  
    public function index()
    {
        $inventories = ShopInventory::all();
        return view('backend.shopinventory.index' , compact('inventories'));
    }

    
    public function create()
    {
        return view('backend.shopinventory.create');

    }

    
    public function store(Request $request)
    {
        $inventory = new ShopInventory();
        $inventory->name  = $request->name;
        $inventory->quantity  = 0;
        $inventory->owner_price  = 0;
        $inventory->student_price  = 0;
        $inventory->total = 0;
        $inventory->save();
        return redirect()->route('shopinventory.index')->with('message', "Added Successfully");

    }

   
    public function show(ShopInventory $shopInventory)
    {
        //
    }

    public function edit($id)
    {
        $inventory = ShopInventory::find($id);

        return view('backend.shopinventory.edit' , compact('inventory'));

    }

    public function update(Request $request, $id)
    {
        $a = $request->price ;
        $b = $request->quantity;

        $inventory = ShopInventory::find($id);
        $inventory->name  = $request->name;
        $inventory->quantity  = $request->quantity;
        $inventory->price  = $request->price;
        $inventory->total = $a * $b;
        $inventory->save();

        return redirect()->route('shopinventory.index')->with('message', "تم التعديل بنجاح");


    }

    public function destroy($id)
    {
        $inventory = ShopInventory::find($id)->delete();
        return redirect()->route('shopinventory.index')->with('message', "تم المسح بنجاح");


    }
}
