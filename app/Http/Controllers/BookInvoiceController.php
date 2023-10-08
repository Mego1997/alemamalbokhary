<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\BookInvoice;
use App\Models\InvoiceSale;
use App\Models\InvoiceSaleDetails;
use App\Models\Payment_method;
use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;


class BookInvoiceController extends Controller
{

    public function index()
    {
        $invoices = InvoiceSale::all();
        return view('backend.bookinvoices.index', compact('invoices'));
    }

    public function create()
    {
        $students  = Student::all();
        $payment_methods = Payment_method::all();
        $requested_prices = BookInventory::all();
        return view('backend.bookinvoices.create', compact('students', 'payment_methods', 'requested_prices'));
    }


    public function store(Request $request)
    {

        $a = $request->book;
        $b = BookInventory::select('student_price')->where('id', $a)->first();
        $request_price = strval($b['student_price']);
// dd($request_price);

        $invoice = new BookInvoice;
        $invoice->paid  = $request_price;
        $invoice->note  = $request->note;
        $invoice->remaning = $request_price - $request_price;
        $invoice->student_id  = $request->student_id;
        $invoice->payment_method_id  = 1;
        $invoice->requested_price_id = $a;
        $invoice->save();

        $inventory = BookInventory::find($a);
        $inventory->quantity = $inventory->quantity - 1;
        $inventory->total = $inventory->student_price * $inventory->quantity;
        $inventory->save();

        $safe = new SafeBook();
        $last = SafeBook::orderBy('id', 'DESC')->first();
        $safe->income = $invoice->paid ;
        $safe->balance = $last->balance + $invoice->paid ;
        $safe->note = 'بيع كتب';
        $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من بيع الكتب';
        $finalsafe->save();

        return redirect()->route('bookinvoices.index')->with('message', "Invoice Added Successfully");
    }


    public function show($id)
    {
        $invoice = InvoiceSale::find($id);
        $invoices = InvoiceSaleDetails::where('invoice_id', $id)->get();
        return view('backend.bookinvoices.show', compact('invoices' , 'invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookInvoice $bookInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookInvoice $bookInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookInvoice $bookInvoice)
    {
        //
    }
}
