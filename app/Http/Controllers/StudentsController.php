<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Delivery_method;
use App\Models\Hadana_invoices;
use App\Models\InvoiceSale;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index()
    {
        $students = Student::where('withdrawal',0)->get();
        return view('backend.students.index' , compact('students'));
    }

    public function studentwithdrawal()
    {
        $students = Student::where('withdrawal',1)->get();
        return view('backend.students.index2' , compact('students'));
    }


    public function create()
    {

        $classes = Classes::all();
        $methods = Delivery_method::all();
        return view('backend.students.create' , compact('classes', 'methods'));
    }


    public function store(Request $request)
    {

      //  dd($request);
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('students'), $imageName);
        $student = new Student;
        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->join_date = $request->join_date;
        $student->address = $request->address;
        $student->parent_phone = $request->parent_phone;
        $student->prev_hadana = $request->prev_hadana;
        $student->withdrawal = $request->withdrawal;
        $student->archive = $request->archive;
        $student->delivery_method_id = $request->delivery_method_id;
        $student->classes_id = $request->class;
        $student->image = $imageName;
        $student->save();

        return redirect()->route('students.index')->with('message', "تم الاضافة بنجاح");
    }



    public function show($id)
    {
        $student = Student::find($id);
        $books = InvoiceSale::where('student_id',$id)->where('type','كتب')->get();
        $clothes = InvoiceSale::where('student_id',$id)->where('type','ملابس')->get();
        return view('backend.students.show' , compact('student','books','clothes'));
    }


    public function edit($id)
    {
        $student = Student::find($id);
        $classes = Classes::all();
        $methods = Delivery_method::all();
        return view('backend.students.edit', compact('student', 'classes', 'methods'));
    }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);

        if (!$request->image){
            $imageName = $student->image;
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('students'), $imageName);
        }


        $student->name = $request->name;
        $student->gender = $request->gender;
        $student->birthday = $request->birthday;
        $student->join_date = $request->join_date;
        $student->address = $request->address;
        $student->parent_phone = $request->parent_phone;
        $student->prev_hadana = $request->prev_hadana;
        $student->withdrawal = $request->withdrawal;
        $student->archive = $request->archive;
        $student->delivery_method_id = $request->delivery_method_id;
        $student->classes_id = $request->class;
        $student->image = $imageName;
        $student->save();

        return redirect()->route('students.index')->with('message', "تم التعديل بنجاح");
    }


    public function destroy($id)
    {
        $student = Student::find($id)->delete();
        return redirect()->route('students.index')->with('message', "تم الحذف بنجاح");


    }
}
