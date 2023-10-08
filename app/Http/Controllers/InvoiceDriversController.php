<?php

namespace App\Http\Controllers;
use App\Models\Drivers;
use App\Models\Locations;
use App\Models\Safe;
use Illuminate\Http\Request;
use App\Models\Invoicedrivers;
use App\Models\invoice_drivers_details;
use App\Models\SafeHadana;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class InvoiceDriversController extends Controller
{
    public function index()
    {
        $invoices = Invoicedrivers::all();
        return view('backend.driversinvoices.index' , compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers  = Drivers::all();
        $locations = Locations::all();
        return view('backend.driversinvoices.create',compact('drivers','locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $check = SafeHadana::orderBy('id', 'DESC')->first();
        if ($check->balance >= $request->paid){
         $invoice = new Invoicedrivers();
         $invoice->driver_id  = $request->driver_id;
         $invoice->remaning = $request->remaning;
         $invoice->paid = $request->paid;
         $invoice->total = $request->total;
         $invoice->note  = $request->note;
         $invoice->save();

       foreach ($request->input('location')  as $key=> $class ) {
        $final_invoices = Invoicedrivers::find( $invoice->id);
        $invoice_details = new invoice_drivers_details;
        $invoice_details->invoice_id  = $final_invoices->id;
        $invoice_details->name  = $request->drivename[$key];
        $invoice_details->location  = $class;
        $invoice_details->single_total = $request->single_total[$key];
        $invoice_details->quantity  = $request->quantity[$key];
        $invoice_details->price  = $request->price[$key];
        $invoice_details->save();

       }

        //update SafeHadana
        $safe = new SafeHadana();
        $last = SafeHadana::orderBy('id', 'DESC')->first();
        $safe->outgoings = $invoice->paid ;
        $safe->balance = $last->balance - $invoice->paid ;
        $safe->note = 'دفع حساب للسائقين';
        $safe->save();


        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->outgoings = $safe->outgoings ;
        $finalsafe->balance = $final->balance - $safe->outgoings ;
        $finalsafe->note = 'دفع حساب رواتب السائقين';
        $finalsafe->save();

        return redirect()->route('driverinvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");
        }else{
            return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $invoice = Invoicedrivers::find($id);
        $invoices = invoice_drivers_details::where('invoice_id', $id)->get();


        return view('backend.driversinvoices.show', compact('invoice','invoices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
