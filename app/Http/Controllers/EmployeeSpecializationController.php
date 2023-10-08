<?php

namespace App\Http\Controllers;

use App\Models\EmployeeSpecialization;
use Illuminate\Http\Request;

class EmployeeSpecializationController extends Controller
{

    public function index()
    {
        $types = EmployeeSpecialization::all();
        return view('backend.employeespecializations.index', compact('types'));
    }


    public function create()
    {
        return view('backend.employeespecializations.create');

    }


    public function store(Request $request)
    {
        $type = new EmployeeSpecialization();
        $type->name  = $request->name;
        $type->save();
        return redirect()->route('employeespecializations.index')->with('message', "Specializations Added Successfully");

    }


    public function show(EmployeeSpecialization $employeeSpecialization)
    {
        //
    }


    public function edit(EmployeeSpecialization $employeeSpecialization)
    {
        //
    }


    public function update(Request $request, EmployeeSpecialization $employeeSpecialization)
    {
        //
    }

    
    public function destroy(EmployeeSpecialization $employeeSpecialization)
    {
        //
    }
}
