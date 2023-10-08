<?php

namespace App\Http\Controllers;

use App\Models\QuranInvoice;
use App\Models\QuranStudent;
use App\Models\Safe;
use App\Models\SafeQuran;
use Illuminate\Http\Request;

class QuranInvoiceController extends Controller
{

    public function index()
    {
        $invoices = QuranInvoice::all();
        return view('backend.quraninvoices.index' , compact('invoices'));
    }

    public function create()
    {
        $students = QuranStudent::all();
        return view('backend.quraninvoices.create' , compact('students'));
    }


    public function store(Request $request)
    {
//        dd($request);

        $invoice = new QuranInvoice();
        $invoice->quran_student_id = $request->quran_student_id;
        $invoice->price = $request->price;
        $invoice->discount = $request->discount;
        $invoice->total = $request->total;
        $invoice->note = $request->note;
        $invoice->save();

        //update Safe
        $safe = new SafeQuran();
        $last = SafeQuran::orderBy('id', 'DESC')->first();
        $safe->income =  $invoice->total ;
        $safe->balance = $last->balance +  $invoice->total ;
        $safe->note = 'تحصيل مصروفات من تحفيظ القران ';
        $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من  تحفيظ القران';
        $finalsafe->save();




        return redirect()->route('quraninvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");



    }


    public function show($id)
    {
        $invoice = QuranInvoice::find($id);
        return view('backend.quraninvoices.show' , compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuranInvoice $quranInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, QuranInvoice $quranInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuranInvoice $quranInvoice)
    {
        //
    }
}
