<?php

namespace App\Http\Controllers;

use App\Models\ClothesInventory;
use App\Models\ClothesInvoice;
use Illuminate\Http\Request;
use App\Models\Payment_method;
use App\Models\SafeClothes;
use App\Models\Student;


class ClothesInvoiceController extends Controller
{
   
    public function index()
    {
       
        $invoices = ClothesInvoice::all();
        return view('backend.clothesinvoices.index', compact('invoices'));
    }

   
    public function create()
    {
        $students  = Student::all();
        $payment_methods = Payment_method::all();
        $requested_prices = ClothesInventory::all();
        return view('backend.clothesinvoices.create', compact('students', 'payment_methods', 'requested_prices'));
    }

    public function store(Request $request)
    {
        $a = $request->book;
        $b = ClothesInventory::select('student_price')->where('id', $a)->first();
        $request_price = strval($b['student_price']);

        $invoice = new ClothesInvoice();
        $invoice->paid  = $request_price;
        $invoice->note  = $request->note;
        $invoice->remaning = $request_price - $request_price;
        $invoice->student_id  = $request->student_id;
        $invoice->payment_method_id  = 1;
        $invoice->requested_price_id = $a;
        $invoice->save();

        $inventory = ClothesInventory::find($a);
        $inventory->quantity = $inventory->quantity - 1;
        $inventory->total = $inventory->student_price * $inventory->quantity;
        $inventory->save();

        $safe = new SafeClothes();
        $last = SafeClothes::orderBy('id', 'DESC')->first();
        $safe->income = $invoice->paid ;
        $safe->balance = $last->balance + $invoice->paid ;
        $safe->note = 'بيع صنف';
        $safe->save();

        return redirect()->route('clothesinvoices.index')->with('message', "Invoice Added Successfully");
    }

   
    public function show(ClothesInvoice $clothesInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClothesInvoice $clothesInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ClothesInvoice $clothesInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClothesInvoice $clothesInvoice)
    {
        //
    }
}
