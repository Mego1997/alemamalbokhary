<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\ClothesInventory;
use App\Models\ShopInventory;
use App\Models\Supplier;
use App\Models\SupplierType;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $suppliers = Supplier::all();
        return view('backend.suppliers.index' , compact('suppliers'));
    }


    public function create()
    {

        $types = SupplierType::all();
        return view('backend.suppliers.create' , compact('types'));
    }


    public function store(Request $request)
    {
        $supplier = new Supplier;
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->type_id = $request->type_id;
        $supplier->save();

        return redirect()->route('suppliers.index')->with('message', "تم الاضافة بنجاح");
    }

    public function getSupplier(Request $request)
    {
        $data['AllSuppliers'] = Supplier::where("type_id",$request->type_id)
            ->get(["id","name"]);
            if($request->type_id == 1 ){
                $data['Allbrands'] = BookInventory::get(["id","name"]);
            }elseif($request->type_id == 2){
                $data['Allbrands'] = ClothesInventory::get(["id","name"]);
            }elseif($request->type_id == 3){
                $data['Allbrands'] = ShopInventory::get(["id","name"]);
            }
        return response()->json($data);
    }


    public function show($id)
    {
        $supplier = Supplier::find($id);
        return view('backend.suppliers.show' , compact('supplier'));
    }


    public function edit($id)
    {
        $supplier = Supplier::find($id);
        $types = SupplierType::all();
        return view('backend.suppliers.edit' , compact('supplier','types'));
    }


    public function update(Request $request, $id)
    {
        $supplier =Supplier::find($id);
        $supplier->name = $request->name;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        $supplier->type_id = $request->type_id;
        $supplier->save();

        return redirect()->route('suppliers.index')->with('message', "تم التعديل بنجاح");
    }


    public function destroy($id)
    {
        $supplier =Supplier::find($id)->delete();
        return redirect()->route('suppliers.index')->with('message', "تم الحذف بنجاح");
    }
}
