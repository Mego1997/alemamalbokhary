<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

class ClassesController extends Controller
{

    public function index()
    {
        $types = Classes::all();
        return view('backend.classes.index', compact('types'));
    }


    public function create()
    {
        return view('backend.classes.create');

    }


    public function store(Request $request)
    {
        $class = new Classes();
        $class->name  = $request->name;
        $class->save();
        return redirect()->route('classes.index')->with('message', " تم الإضافة بنجاح");

    }


    public function show($id)
    {
        $students = Student::where('classes_id',$id)->get();
        $classes = Classes::find($id);

        return view('backend.classes.show' , compact('students','classes'));
    }

    public function edit($id)
    {
        $type = classes::find($id);
        return view('backend.classes.edit', compact('type'));
    }


    public function update(Request $request, $id)
    {
        $class = classes::find($id);
        $class->name  = $request->name;
        $class->save();
        return redirect()->route('classes.index')->with('message', " تم التعديل بنجاح");

    }


    public function destroy($id)
    {
        $class = Classes::find($id)->delete();
        return redirect()->route('classes.index')->with('message', " تم الحذف بنجاح");
    }
}
