<?php

namespace App\Http\Controllers;

use App\Models\InvoiceSaleDetails;
use App\Models\InvoiceShop;
use App\Models\InvoiceShopDetails;
use App\Models\Locations;
use App\Models\Safe;
use App\Models\SafeHadana;
use App\Models\ShopInventory;
use Illuminate\Http\Request;

class InvoiceShopController extends Controller
{

    public function index()
    {
        $invoices = InvoiceShop::all();
        return view('backend.shopinvoices.index' , compact('invoices'));
    }


    public function create()
    {
        $itemes = ShopInventory::all();
        return view('backend.shopinvoices.create',compact('itemes'));
    }


    public function store(Request $request)
    {

//        dd($request);
        $invoice = new InvoiceShop();
        $invoice->total  = $request->total;
        $invoice->note  = $request->note;
        $invoice->save();



        foreach ($request->input('name')  as $key=> $class ) {



            $final_invoices = InvoiceShop::find( $invoice->id);
            $inventory = ShopInventory::find($class);

            $invoice_details = new InvoiceShopDetails();
            $invoice_details->invoice_id  = $final_invoices->id;
            $invoice_details->name  = $inventory->name;
            $invoice_details->price  = $request->owner_price[$key];
            $invoice_details->quantity = $request->quantity[$key];
            $invoice_details->total = $request->single_total[$key];
            $invoice_details->save();
            //update inventory
            $inventory->quantity = $inventory->quantity -  $request->quantity[$key];
            $inventory->total = $inventory->student_price * $inventory->quantity;
            $inventory->save();
            }

        $safe = new SafeHadana();
        $last = SafeHadana::orderBy('id', 'DESC')->first();
        $safe->income =  $invoice->total ;
        $safe->balance = $last->balance +  $invoice->total ;
        $safe->note = 'تحصيل مبيعات من الكانتين';
        $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من الكانتين';
        $finalsafe->save();

            return redirect()->route('shopinvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");




    }


    public function show($id)
    {
        $invoice = InvoiceShop::find($id);
        $invoices = InvoiceShopDetails::where('invoice_id',$id)->get();
        return view('backend.shopinvoices.show', compact('invoices' , 'invoice'));
    }

    public function getpriceee(Request $request)
    {
        $data['Prices'] = ShopInventory::where('id',$request->val)
            ->get(["student_price"]);

        return response()->json($data);

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InvoiceShop $invoiceShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InvoiceShop $invoiceShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InvoiceShop $invoiceShop)
    {
        //
    }
}
