<?php

namespace App\Http\Controllers;

use App\Models\ClothesInventory;
use Illuminate\Http\Request;

class ClothesInventoryController extends Controller
{

    public function index()
    {
        $inventories = ClothesInventory::all();
        return view('backend.clothesinventory.index' , compact('inventories'));
    }


    public function create()
    {
        return view('backend.clothesinventory.create');

    }


    public function store(Request $request)
    {

        $inventory = new ClothesInventory();
        $inventory->name  = $request->name;
        $inventory->quantity  = 0;
        $inventory->owner_price  = 0;
        $inventory->student_price  = 0;
        $inventory->total = 0;
        $inventory->save();
        return redirect()->route('clothesinventory.index')->with('message', "Added Successfully");

    }


    public function show(ClothesInventory $clothesInventory)
    {
        //
    }


    public function edit($id)
    {
        $inventory = ClothesInventory::find($id);

        return view('backend.clothesinventory.edit' , compact('inventory'));

    }


    public function update(Request $request, $id)
    {
        $a = $request->price ;

        $inventory = ClothesInventory::find($id);
        $inventory->name  = $inventory->name;
        $inventory->quantity  = $inventory->quantity;
        $inventory->student_price  = $request->price;
        $inventory->total = $a * $inventory->quantity;
        $inventory->save();

        return redirect()->route('clothesinventory.index')->with('message', "تم التعديل بنجاح");


    }


    public function destroy($id)
    {
        $inventory = ClothesInventory::find($id)->delete();
        return redirect()->route('clothesinventory.index')->with('message', "تم المسح بنجاح");


    }
}
