<?php

namespace App\Http\Controllers;


use App\Models\Locations;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Locations::all();
        return view('backend.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.locations.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $location = new locations();
        $location->name  = $request->name;
        $location->price =$request->price;
        $location->save();
        return redirect()->route('locations.index')->with('message', "location Added Successfully");

    }
    public function edit($id)
    {
        $location = Locations::find($id);

        return view('backend.locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        $location = Locations::find($id);
        $location->name  = $request->name;
        $location->price  = $request->price;
        $location->save();

        return redirect()->route('locations.index')->with('message', "تم التعديل بنجاح");

    }


    public function destroy(Request $request ,$id)
    {
        $location = locations::find($id)->delete();
        return redirect()->route('locations.index')->with('message', "تم المسح بنجاح");

    }
}
