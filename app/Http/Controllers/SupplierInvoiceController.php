<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\ClothesInventory;
use App\Models\InvoicePurchase;
use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\Supplier;
use App\Models\SupplierInvoice;
use App\Models\SupplierInvoiceHistory;
use App\Models\SupplierType;
use Illuminate\Http\Request;

class SupplierInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = SupplierInvoice::all();
        return view('backend.supplierinvoices.index' , compact('invoices'));
    }

    public function create()
    {
        $suppliers  = Supplier::all();
        $suppliertypes = SupplierType::all();
        return view('backend.supplierinvoices.create',compact('suppliers','suppliertypes'));
    }


    public function store(Request $request)
    {
        $total = $request->quantity * $request->owner_price ;
        $remaning = $total - $request->paid  ;
        $invoice = new SupplierInvoice();
        $invoice->supplier_id  = $request->supplier_id ;
        $invoice->paid  = $request->paid;
        $invoice->remaning = $remaning;
        $invoice->quantity  = $request->quantity;
        $invoice->total  = $total;
        $invoice->note  = $request->note;
        $invoice->name  = $request->name;
        $invoice->owner_price  = $request->owner_price;
        $invoice->student_price  = $request->student_price;
        $invoice->save();

        if($request->type_id == 1 ){
        $inventory = new BookInventory();
        $in_total =  $request->quantity * $request->student_price;
        $inventory->name  = $request->name;
        $inventory->supplier_id  = $request->supplier_id;
        $inventory->quantity  = $request->quantity;
        $inventory->owner_price  = $request->owner_price;
        $inventory->student_price  = $request->student_price;
        $inventory->total  = $in_total;
        $inventory->save();


        $safe = new SafeBook();
        $last = SafeBook::orderBy('id', 'DESC')->first();
        $safe->outgoings = $invoice->paid ;
        $safe->balance = $last->balance - $invoice->paid ;
        $safe->note = 'شراء كتب';
        $safe->save();

        }elseif($request->type_id == 2 ){

        $inventory = new ClothesInventory();
        $in_total =  $request->quantity * $request->student_price;
        $inventory->name  = $request->name;
        $inventory->supplier_id  = $request->supplier_id;
        $inventory->quantity  = $request->quantity;
        $inventory->owner_price  = $request->owner_price;
        $inventory->student_price  = $request->student_price;
        $inventory->total  = $in_total;
        $inventory->save();

        $safe = new SafeClothes();
        $last = SafeClothes::orderBy('id', 'DESC')->first();
        $safe->outgoings = $invoice->paid ;
        $safe->balance = $last->balance - $invoice->paid ;
        $safe->note = 'شراء ملابس';
        $safe->save();
        }

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->outgoings = $safe->outgoings ;
        $finalsafe->balance = $final->balance - $safe->outgoings ;
        $finalsafe->note = 'دفع فلوس للموردين';
        $finalsafe->save();



        return redirect()->route('supplierinvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }



    public function show(SupplierInvoice $supplierInvoice)
    {
        //
    }


    public function edit($id)
    {
        $invoice = InvoicePurchase::find($id);

        return view('backend.supplierinvoices.edit' , compact('invoice'));

    }


    public function update(Request $request, $id)
    {
        $supplier_invoices = InvoicePurchase::find($id);
        $invoice_history = new SupplierInvoiceHistory();
        $invoice_history->invoice_id  = $supplier_invoices->id;
        $invoice_history->supplier_id  = $supplier_invoices->supplier_id;
        $invoice_history->paid  = $supplier_invoices->paid;
        $invoice_history->remaning =$supplier_invoices->remaning;
        $invoice_history->total = $supplier_invoices->total;
        $invoice_history->owner_price = $supplier_invoices->owner_price;
        $invoice_history->student_price = $supplier_invoices->student_price;
        $invoice_history->quantity = $supplier_invoices->quantity;
        $invoice_history->note  = $supplier_invoices->note;
        $invoice_history->save();




        $a = $request->remaning ;
        $b = $request->paid ;
        $supplier_invoices->paid  = $request->paid;
        $supplier_invoices->note  = $request->note;
        $supplier_invoices->remaning = $a - $b;
        $supplier_invoices->save();

        $safe = new SafeBook();
        $last = SafeBook::orderBy('id', 'DESC')->first();
        $safe->outgoings = $supplier_invoices->paid  ;
        $safe->balance = $last->balance - $supplier_invoices->paid ;
        $safe->note = 'تكمله اقساط كتب' ;
        $safe->save();

        return redirect()->route('supplierinvoices.index')->with('message', "Invoice Added Successfully");


    }


    public function destroy(SupplierInvoice $supplierInvoice)
    {
        //
    }
}
