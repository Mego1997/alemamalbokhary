<?php

namespace App\Http\Controllers;
use App\Models\Drivers;
use App\Models\Invoicedrivers;
use App\Models\Locations;
use Illuminate\Http\Request;

class DriversController extends Controller
{

    public function index()
    {
        $drivers = Drivers::all();
        return view('backend.drivers.index' , compact('drivers'));
    }


    public function create()

    {
        return view('backend.drivers.create');
    }


    public function store(Request $request)
    {

        //dd($request);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('drivers'), $imageName);
        $imageName1 = time().'.'.$request->image1->extension();
        $request->image1->move(public_path('drivers'), $imageName1);

        $driver = new Drivers;
        $driver->name = $request->name;
        $driver->phone = $request->phone;
        $driver->code = $request->code;
        $driver->birthday = $request->birthday;
        $driver->address = $request->address;
        $driver->image = $imageName;
        $driver->image_ID = $imageName1;
        $driver->save();

        return redirect()->route('drivers.index')->with('message', "تم الاضافة بنجاح");
    }

    public function getpricee(Request $request){
        $data['Prices'] = Locations::where('id',$request->val)
        ->get(["price"]);

        return response()->json($data);

    }


    public function show($id)
    {
        $driver = Drivers::find($id);
        $invoices = Invoicedrivers::where('driver_id',$id)->get();
        return view('backend.drivers.show' , compact('driver','invoices'));
    }


    public function edit($id)
    {
        $driver = Drivers::find($id);
        return view('backend.drivers.edit', compact('driver'));
    }


    public function update(Request $request, $id)
    {

        $driver = Drivers::find($id);
        if (!$request->image){
            $imageName = $driver->image;
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('drivers'), $imageName);
        }

        if (!$request->image1){
            $imageName1 = $driver->image_ID;
        }else{
            $imageName1 = time().'.'.$request->image1->extension();
            $request->image1->move(public_path('drivers'), $imageName1);
        }

        $driver->name = $request->name;
        $driver->phone = $request->phone;
        $driver->code = $request->code;
        $driver->birthday = $request->birthday;
        $driver->address = $request->address;
        $driver->image = $imageName;
        $driver->image_ID = $imageName1;
        $driver->save();

        return redirect()->route('drivers.index')->with('message', "تم التعديل بنجاح");
    }


    public function destroy($id)
    {
        $driver = Drivers::find($id)->delete();
        return redirect()->route('drivers.index')->with('message', "تم الحذف بنجاح");


    }
}
