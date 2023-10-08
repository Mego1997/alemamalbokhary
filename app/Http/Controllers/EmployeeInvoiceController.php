<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeInvoice;
use App\Models\Safe;
use App\Models\SafeHadana;
use Illuminate\Http\Request;

class EmployeeInvoiceController extends Controller
{

    public function index()
    {
        $invoices = EmployeeInvoice::all();
        return view('backend.employeeinvoices.index' , compact('invoices'));
    }


    public function create()
    {
        $employees = Employee::all();
        return view('backend.employeeinvoices.create' , compact('employees'));

    }

    public function getsalary(Request $request)
    {
            $data['salary'] = Employee::where('id',$request->employee_id)
            ->get(["salary"]);
            return response()->json($data);
    }



    public function store(Request $request)
    {
        $check = SafeHadana::orderBy('id', 'DESC')->first();
        if ($check->balance >= $request->paid){

       $employee = new EmployeeInvoice();
       $employee->employee_id = $request->employee_id;
       $employee->salary = $request->salary;
       $employee->discount = $request->discount;
       $employee->total = $request->total;
       $employee->note = $request->note;
       $employee->save();

       //update SafeHadana
       $safe = new SafeHadana();
       $last = SafeHadana::orderBy('id', 'DESC')->first();
       $safe->outgoings = $employee->total ;
       $safe->balance = $last->balance - $employee->total ;
       $safe->note = 'دفع مرتبات ';
       $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->outgoings = $safe->outgoings ;
        $finalsafe->balance = $final->balance - $safe->outgoings ;
        $finalsafe->note = 'دفع فلوس مرتبات';
        $finalsafe->save();

       return redirect()->route('employeeinvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");
        }else{
            return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
        }
    }


    public function show($id)
    {
       $invoice = EmployeeInvoice::find($id);
       return view('backend.employeeinvoices.show' , compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EmployeeInvoice $employeeInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EmployeeInvoice $employeeInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeInvoice $employeeInvoice)
    {
        //
    }
}
