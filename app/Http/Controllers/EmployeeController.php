<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\ClassSet;
use App\Models\Employee;
use App\Models\EmployeeSpecialization;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $employees = Employee::all();
        return view('backend.employees.index' , compact('employees'));
    }


    public function create()
    {
        $classes = Classes::all();
        $specializations = EmployeeSpecialization::all();
        return view('backend.employees.create' , compact('classes', 'specializations'));
    }


    public function store(Request $request)
    {
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('employees'), $imageName);
        $employee = new Employee;
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->birthday = $request->birthday;
        $employee->join_date = $request->join_date;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->degree = $request->degree;
        $employee->salary = $request->salary;
        $employee->specialization_id  = $request->specialization_id;
        $employee->image = $imageName;
        $employee->save();

        if ($request->class_id) {
            foreach ($request->input('class_id') as  $class) {

                $data = json_decode($class, true);

                $class = new ClassSet();
                $class->class_id = $data;
                $class->teacher_id = $employee->id;
                $class->save();
            }
        }

        return redirect()->route('employees.index')->with('message', "تم الاضافة بنجاح");


    }


    public function show($id)
    {
        $employee = Employee::find($id);
        $classes = ClassSet::where('teacher_id',$id)->get();
        return view('backend.employees.show' , compact('employee','classes'));
    }


    public function edit($id)
    {
        $employee = Employee::find($id);
        $classes = Classes::all();
        $class = ClassSet::where('teacher_id',$id)->get();
        $specializations = EmployeeSpecialization::all();
        return view('backend.employees.edit', compact('employee', 'classes', 'specializations','class'));

    }


    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        if (!$request->image){
            $imageName = $employee->image ;
        }else{
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('employees'), $imageName);
        }

        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->birthday = $request->birthday;
        $employee->join_date = $request->join_date;
        $employee->address = $request->address;
        $employee->phone = $request->phone;
        $employee->degree = $request->degree;
        $employee->salary = $request->salary;
        $employee->specialization_id  = $request->specialization_id;
        $employee->image = $imageName;
        $employee->save();

        if ($request->class_id) {

            ClassSet::where('teacher_id',$employee->id)->delete();
            foreach ($request->input('class_id') as  $class) {

                $data = json_decode($class, true);

                $class = new ClassSet();
                $class->class_id = $data;
                $class->teacher_id = $employee->id;
                $class->save();
            }
        }

        return redirect()->route('employees.index')->with('message', "تم التعديل بنجاح");


    }


    public function destroy($id)
    {
        $employee = Employee::find($id)->delete();

        return redirect()->route('employees.index')->with('message', "تم الحذف بنجاح");


    }
}
