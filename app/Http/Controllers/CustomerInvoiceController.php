<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\ClothesInventory;
use App\Models\CustomerInvoice;
use App\Models\CustomerInvoiceDetail;
use App\Models\InvoiceSale;
use App\Models\InvoiceSaleDetails;
use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\SupplierType;
use Illuminate\Http\Request;

class CustomerInvoiceController extends Controller
{
    public function index()
    {
        $invoicess = CustomerInvoice::orderBy('created_at', 'DESC')->get();
        return view('backend.customerinvoices.index', compact('invoicess'));
    }

    public function create()
    {
        $types = SupplierType::where('id',1)
            ->orwhere('id',2)
            ->get();
        return view('backend.customerinvoices.create', compact('types'));
    }



    public function store(Request $request)
    {
//       dd($request);
        if($request->type== 1){

            $invoice = new CustomerInvoice();
            $invoice->name  = $request->name;
            $invoice->phone  = $request->phone;
            $invoice->type  = 'كتب';
            $invoice->paid  = 0 ;
            $invoice->discount  = 0 ;
            $invoice->total  = 0 ;
            $invoice->note  = $request->note;
            $invoice->save();

            foreach ($request->input('class')  as $key=> $class ) {



                $final_invoices = CustomerInvoice::find($invoice->id);
                $inventory = BookInventory::find($class);

                $invoice_details = new CustomerInvoiceDetail();
                $invoice_details->customer_invoice_id = $final_invoices->id;
                $invoice_details->class  = $inventory->name;
                $invoice_details->paid  = $request->paid[$key];
                $invoice_details->discount  = $request->discount[$key];
                $invoice_details->quantity  = $request->quantity[$key];
                $invoice_details->total = $request->total[$key];
                $invoice_details->save();
                //update inventory
                $inventory->quantity = $inventory->quantity - $request->quantity[$key];
                $inventory->total = $inventory->student_price * $inventory->quantity;
                $inventory->save();
                //update Final_Invoice
                $final_invoices->paid = $final_invoices->paid + $invoice_details->paid ;
                $final_invoices->discount = $final_invoices->discount + $invoice_details->discount ;
                $final_invoices->total = $final_invoices->total + $invoice_details->total ;
                $final_invoices->save();

            }
            //update Safe
            $safe = new SafeBook();
            $last = SafeBook::orderBy('id', 'DESC')->first();
            $safe->income = $final_invoices->total ;
            $safe->balance = $last->balance + $final_invoices->total ;
            $safe->note = 'بيع كتب';
            $safe->save();

        }elseif($request->type == 2){
            $invoice = new CustomerInvoice();
            $invoice->name  = $request->name;
            $invoice->phone  = $request->phone;
            $invoice->type  = 'ملابس';
            $invoice->paid  = 0 ;
            $invoice->discount  = 0 ;
            $invoice->total  = 0 ;
            $invoice->payment_method_id  = 1;
            $invoice->note  = $request->note;
            $invoice->save();
            foreach ($request->input('class')  as $key=> $class ) {

                $final_invoices = CustomerInvoice::find( $invoice->id);
                $inventory = ClothesInventory::find($class);

                $invoice_details = new CustomerInvoiceDetail();
                $invoice_details->customer_invoice_id = $final_invoices->id;
                $invoice_details->class  = $inventory->name;
                $invoice_details->paid  = $request->paid[$key];
                $invoice_details->discount  = $request->discount[$key];
                $invoice_details->quantity  = $request->quantity[$key];
                $invoice_details->total = $request->total[$key];
                $invoice_details->save();
                //update inventory
                $inventory->quantity = $inventory->quantity - $request->quantity[$key];
                $inventory->total = $inventory->student_price * $inventory->quantity;
                $inventory->save();
                //update Final_Invoice
                $final_invoices->paid = $final_invoices->paid + $invoice_details->paid ;
                $final_invoices->discount = $final_invoices->discount + $invoice_details->discount ;
                $final_invoices->total = $final_invoices->total + $invoice_details->total ;
                $final_invoices->save();
            }
                 //update Safe
                 $safe = new SafeClothes();
                 $last = SafeClothes::orderBy('id', 'DESC')->first();
                 $safe->income = $final_invoices->total ;
                 $safe->balance = $last->balance + $final_invoices->total ;
                 $safe->note = 'بيع ملابس';
                 $safe->save();

        }

           //update Safe
           $finalsafe = new Safe();
           $final = Safe::orderBy('id', 'DESC')->first();
           $finalsafe->income = $safe->income ;
           $finalsafe->balance = $final->balance + $safe->income ;
           $finalsafe->note = 'تحصيل اموال من بيع منتجات';
           $finalsafe->save();


        return redirect()->route('customerinvoice.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }

    public function show($id)
    {
        $invoice = CustomerInvoice::find($id);
        $invoices = CustomerInvoiceDetail::where('customer_invoice_id', $id)->get();
        return view('backend.customerinvoices.show', compact('invoices' , 'invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerInvoice $customerInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerInvoice $customerInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerInvoice $customerInvoice)
    {
        //
    }
}
