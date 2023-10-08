<?php

namespace App\Http\Controllers;

use App\Models\Hadana_invoices;
use App\Models\Hadana_invoices_history;
use App\Models\Payment_method;
use App\Models\Requested_price;
use App\Models\Safe;
use App\Models\SafeHadana;
use App\Models\Student;
use Illuminate\Http\Request;

class HadanaInvoicesController extends Controller
{

    public function index()
    {
        $invoices = Hadana_invoices::all();
        return view('backend.invoices.index' , compact('invoices'));
    }


    public function create()
    {


        $students = Student::where('withdrawal',0)->get();
         $payment_methods = Payment_method::all();
         $requested_prices =Requested_price::all();
        return view('backend.invoices.create',compact('students','payment_methods','requested_prices'));
    }


    public function store(Request $request)
    {

//         dd($request);


        $invoice = new Hadana_invoices;
        $invoice->requested   = $request->requested  ;
        $invoice->paid  = $request->paid;
        $invoice->discount  = $request->discount;
        $invoice->note  = $request->note;
        $invoice->remaning =$request->remainig;
        $invoice->student_id  = $request->student_id ;
        $invoice->payment_method_id   = $request->payment_method_id  ;
        $invoice->requested_price   = $request->requested_price  ;
        $invoice->save();

        $invoice_history = new Hadana_invoices_history();
        $invoice_history->hadana_invoices_id  = $invoice->id;
        $invoice_history->requested   = $invoice->requested  ;
        $invoice_history->paid  = $invoice->paid;
        $invoice_history->discount   = $invoice->discount  ;
        $invoice_history->note  = $invoice->note;
        $invoice_history->remaning =$invoice->remaning;
        $invoice_history->student_id  = $invoice->student_id ;
        $invoice_history->payment_method_id   = $invoice->payment_method_id  ;
        $invoice_history->requested_price   = $invoice->requested_price  ;
        $invoice_history->save();


         //update Safe
         $safe = new SafeHadana();
         $last = SafeHadana::orderBy('id', 'DESC')->first();
         $safe->income =  $invoice->paid ;
         $safe->balance = $last->balance +  $invoice->paid ;
         $safe->note = 'تحصيل مصروفات دراسية';
         $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من المصروفات الدراسية';
        $finalsafe->save();

        return redirect()->route('invoices.index')->with('message', "تم الدفع بنجاح");

    }


    public function show(Hadana_invoices $hadana_invoices)
    {

    }


    public function edit($id)
    {
        $invoice = Hadana_invoices::find($id);
        $requested_prices =  Requested_price::all();

        return view('backend.invoices.edit' , compact('invoice', 'requested_prices'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hadana_invoices = Hadana_invoices::find($id);
        $invoice_history = new Hadana_invoices_history();
        $invoice_history->hadana_invoices_id  = $hadana_invoices->id;
        $invoice_history->discount   = 0  ;
        $invoice_history->requested   = $hadana_invoices->remaning  ;
        $invoice_history->paid  = $request->paid;
        $invoice_history->note  = $hadana_invoices->note;
        $invoice_history->remaning =$hadana_invoices->remaning - $request->paid;
        $invoice_history->student_id  = $hadana_invoices->student_id ;
        $invoice_history->payment_method_id   = $hadana_invoices->payment_method_id  ;
        $invoice_history->requested_price   = $hadana_invoices->requested_price  ;
        $invoice_history->save();


        $a = $request->remaning ;
        $b = $request->paid ;
        $hadana_invoices->paid  = $request->paid + $hadana_invoices->paid  ;
        $hadana_invoices->note  = $request->note ;
        $hadana_invoices->remaning = $a - $b;
        $hadana_invoices->student_id  =$hadana_invoices->student_id ;
        $hadana_invoices->payment_method_id   = $hadana_invoices->payment_method_id  ;
        $hadana_invoices->requested_price   = $hadana_invoices->requested_price  ;
        $hadana_invoices->requested   = $hadana_invoices->requested  ;
        $hadana_invoices->discount   = $hadana_invoices->discount  ;

        $hadana_invoices->save();

         //update Safe
         $safe = new SafeHadana();
         $last = SafeHadana::orderBy('id', 'DESC')->first();
         $safe->income =  $request->paid ;
         $safe->balance = $last->balance +  $request->paid ;
         $safe->note = 'تحصيل مصروفات دراسية';
         $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من المصروفات الدراسية';
        $finalsafe->save();

        return redirect()->route('invoices.index')->with('message', "تم الدفع بنجاح");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
