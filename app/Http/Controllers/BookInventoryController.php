<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\Payment_method;
use App\Models\Student;
use Illuminate\Http\Request;

class BookInventoryController extends Controller
{

    public function index()
    {
        $inventories = BookInventory::all();
        return view('backend.bookinventory.index' , compact('inventories'));
    }


    public function create()
    {

       return view('backend.bookinventory.create');
    }


    public function store(Request $request)
    {

        $inventory = new BookInventory;
        $inventory->name  = $request->name;
        $inventory->quantity  = 0;
        $inventory->owner_price  = 0;
        $inventory->student_price  = 0;
        $inventory->total = 0;
        $inventory->save();
        return redirect()->route('bookinventory.index')->with('message', "Book Added Successfully");

    }

    public function show(BookInventory $bookInventory)
    {
        //
    }


    public function edit($id)
    {
        $inventory = BookInventory::find($id);

        return view('backend.bookinventory.edit' , compact('inventory'));

    }


    public function update(Request $request, $id)
    {
        $a = $request->price ;

        $inventory = BookInventory::find($id);
        $inventory->name  = $inventory->name;
        $inventory->quantity  = $inventory->quantity;
        $inventory->student_price  = $request->price;
        $inventory->total = $a * $inventory->quantity;
        $inventory->save();

        return redirect()->route('bookinventory.index')->with('message', "تم التعديل بنجاح");


    }


    public function destroy($id)
    {
        $inventory = BookInventory::find($id)->delete();
        return redirect()->route('bookinventory.index')->with('message', "تم المسح بنجاح");


    }
}
