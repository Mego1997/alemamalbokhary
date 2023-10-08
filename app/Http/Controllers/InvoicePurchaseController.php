<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\ClothesInventory;
use App\Models\InvoicePurchase;
use App\Models\InvoicePurchasesDetails;
use App\Models\InvoicePurchasesHistory;
use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\SafeHadana;
use App\Models\ShopInventory;
use App\Models\Supplier;
use App\Models\SupplierType;
use Illuminate\Http\Request;

class InvoicePurchaseController extends Controller
{

    public function index()
    {
        $invoices = InvoicePurchase::all();
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
        // dd($request);


        if($request->type_id== 1){

            $check = SafeBook::orderBy('id', 'DESC')->first();
            if ($check->balance >= $request->paid){
                $invoice = new InvoicePurchase();
                $invoice->type_id  = $request->type_id;
                $invoice->supplier_id  = $request->supplier_id ;
                $invoice->paid  = $request->paid;
                $invoice->total  = $request->total;
                $invoice->remaning = $request->remaning;
                $invoice->note  = $request->note;
                $invoice->save();

                $invoice_history = new InvoicePurchasesHistory();
                $invoice_history->invoice_id  = $invoice->id;
                $invoice_history->type_id  = $invoice->type_id;
                $invoice_history->supplier_id  = $invoice->supplier_id ;
                $invoice_history->paid  = $invoice->paid;
                $invoice_history->total  = $invoice->total;
                $invoice_history->remaning = $invoice->remaning;
                $invoice_history->note  = $invoice->note;
                $invoice_history->save();

                foreach ($request->input('name')  as $key=> $class ) {

                $final_invoices = InvoicePurchase::find( $invoice->id);
                $inventory = BookInventory::find($class);

                $invoice_details = new InvoicePurchasesDetails();
                $invoice_details->invoice_id  = $final_invoices->id;
                $invoice_details->name  = $inventory->name;
                $invoice_details->total = $request->single_total[$key];
                $invoice_details->quantity  = $request->quantity[$key];
                $invoice_details->owner_price  = $request->owner_price[$key];
                $invoice_details->student_price  = $request->student_price[$key];
                $invoice_details->save();

                 //update inventory
                    $quan = $invoice_details->quantity + $inventory->quantity ;
                 $inventory->supplier_id  = $invoice->supplier_id ;
                 $inventory->owner_price = $invoice_details->owner_price ;
                 $inventory->student_price = $invoice_details->student_price ;
                $inventory->quantity = $quan;
                $inventory->total = $invoice_details->student_price *  $quan;
                $inventory->save();
             }

                //update Safe
               $safe = new SafeBook();
               $last = SafeBook::orderBy('id', 'DESC')->first();
               $safe->outgoings = $final_invoices->paid ;
               $safe->balance = $last->balance - $final_invoices->paid ;
               $safe->note = 'شراء كتب';
               $safe->save();

            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }



        }elseif($request->type_id== 2){

            $check = SafeClothes::orderBy('id', 'DESC')->first();
            if ($check->balance >= $request->paid){
                $invoice = new InvoicePurchase();
                $invoice->type_id  = $request->type_id;
                $invoice->supplier_id  = $request->supplier_id ;
                $invoice->paid  = $request->paid;
                $invoice->total  = $request->total;
                $invoice->remaning = $request->remaning;
                $invoice->note  = $request->note;
                $invoice->save();

                $invoice_history = new InvoicePurchasesHistory();
                $invoice_history->invoice_id  = $invoice->id;
                $invoice_history->type_id  = $invoice->type_id;
                $invoice_history->supplier_id  = $invoice->supplier_id ;
                $invoice_history->paid  = $invoice->paid;
                $invoice_history->total  = $invoice->total;
                $invoice_history->remaning = $invoice->remaning;
                $invoice_history->note  = $invoice->note;
                $invoice_history->save();

            foreach ($request->input('name')  as $key=> $class ) {

                $final_invoices = InvoicePurchase::find( $invoice->id);
                $inventory = ClothesInventory::find($class);

                $invoice_details = new InvoicePurchasesDetails();
                $invoice_details->invoice_id  = $final_invoices->id;
                $invoice_details->name  = $inventory->name;
                $invoice_details->total = $request->single_total[$key];
                $invoice_details->quantity  = $request->quantity[$key];
                $invoice_details->owner_price  = $request->owner_price[$key];
                $invoice_details->student_price  = $request->student_price[$key];
                $invoice_details->save();

                 //update inventory
                $quan = $invoice_details->quantity + $inventory->quantity ;

                $inventory->supplier_id  = $invoice->supplier_id ;
                 $inventory->owner_price = $invoice_details->owner_price ;
                 $inventory->student_price = $invoice_details->student_price ;
                $inventory->quantity = $quan ;
                $inventory->total = $invoice_details->student_price *  $quan;
                $inventory->save();
             }

                //update Safe
               $safe = new SafeClothes();
               $last = SafeClothes::orderBy('id', 'DESC')->first();
               $safe->outgoings = $final_invoices->paid ;
               $safe->balance = $last->balance - $final_invoices->paid ;
               $safe->note = 'شراء ملابس';
               $safe->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }

        }elseif($request->type_id== 3){

            $check = SafeHadana::orderBy('id', 'DESC')->first();
            if ($check->balance >= $request->paid){
                $invoice = new InvoicePurchase();
                $invoice->type_id  = $request->type_id;
                $invoice->supplier_id  = $request->supplier_id ;
                $invoice->paid  = $request->paid;
                $invoice->total  = $request->total;
                $invoice->remaning = $request->remaning;
                $invoice->note  = $request->note;
                $invoice->save();

                $invoice_history = new InvoicePurchasesHistory();
                $invoice_history->invoice_id  = $invoice->id;
                $invoice_history->type_id  = $invoice->type_id;
                $invoice_history->supplier_id  = $invoice->supplier_id ;
                $invoice_history->paid  = $invoice->paid;
                $invoice_history->total  = $invoice->total;
                $invoice_history->remaning = $invoice->remaning;
                $invoice_history->note  = $invoice->note;
                $invoice_history->save();

            foreach ($request->input('name')  as $key=> $class ) {

                $final_invoices = InvoicePurchase::find( $invoice->id);
                $inventory = ShopInventory::find($class);

                $invoice_details = new InvoicePurchasesDetails();
                $invoice_details->invoice_id  = $final_invoices->id;
                $invoice_details->name  = $inventory->name;
                $invoice_details->total = $request->single_total[$key];
                $invoice_details->quantity  = $request->quantity[$key];
                $invoice_details->owner_price  = $request->owner_price[$key];
                $invoice_details->student_price  = $request->student_price[$key];
                $invoice_details->save();

                 //update inventory
                $quan = $invoice_details->quantity + $inventory->quantity ;
                $inventory->supplier_id  = $invoice->supplier_id ;
                 $inventory->owner_price = $invoice_details->owner_price ;
                 $inventory->student_price = $invoice_details->student_price ;
                $inventory->quantity = $quan ;
                $inventory->total = $invoice_details->student_price *  $quan;
                $inventory->save();
             }

             //update SafeHadana
             $safe = new SafeHadana();
             $last = SafeHadana::orderBy('id', 'DESC')->first();
             $safe->outgoings = $final_invoices->paid ;
             $safe->balance = $last->balance - $final_invoices->paid ;
             $safe->note = 'شراء منتجات للكانتين';
             $safe->save();

            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }


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


    public function show($id)
    {
        $invoice = InvoicePurchase::find($id);
        $invoices = InvoicePurchasesDetails::where('invoice_id', $id)->get();
        return view('backend.supplierinvoices.show', compact('invoices' , 'invoice'));
    }

    public function show2($id)
    {
        $invoice = InvoicePurchase::find($id);
        $invoices = InvoicePurchasesHistory::where('invoice_id', $id)->get();
        return view('backend.supplierinvoices.show2', compact('invoices','invoice'));
    }



    public function edit($id)
    {
        $invoice = InvoicePurchase::find($id);

        return view('backend.supplierinvoices.edit' , compact('invoice'));

    }


    public function update(Request $request, $id)
    {
        $supplier_invoices = InvoicePurchase::find($id);
        $invoice_history = new InvoicePurchasesHistory();
        $invoice_history->invoice_id  = $supplier_invoices->id;
        $invoice_history->supplier_id  = $supplier_invoices->supplier_id;
        $invoice_history->type_id  = $supplier_invoices->type_id;
        $invoice_history->paid  =  $request->paid;
        $invoice_history->remaning  = $supplier_invoices->remaning -  $request->paid ;
        $invoice_history->total  = $supplier_invoices->remaning;
        $invoice_history->note  = $supplier_invoices->note;


        //update main invoice
        $a = $request->remaning ;
        $b = $request->paid ;
        $supplier_invoices->paid  = $supplier_invoices->paid + $b ;
        $supplier_invoices->note  = $request->note;
        $supplier_invoices->remaning = $a - $b;


        if($supplier_invoices->type_id== 1) {
            $safe = new SafeBook();
            $last = SafeBook::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid) {
                $safe->outgoings = $request->paid;
                $safe->balance = $last->balance - $request->paid;
                $safe->note = 'تكمله اقساط كتب';
                $safe->save();
                $invoice_history->save();
                $supplier_invoices->save();
            }else{
                    return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
                }
        }elseif ($supplier_invoices->type_id== 2){
            $safe = new SafeClothes();
            $last = SafeClothes::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid) {
            $safe->outgoings =  $request->paid;
            $safe->balance = $last->balance -  $request->paid;
            $safe->note = 'تكمله اقساط ملابس';
            $safe->save();
            $invoice_history->save();
            $supplier_invoices->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }
        }elseif ($supplier_invoices->type_id== 3){

            $safe = new SafeHadana();
            $last = SafeHadana::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid) {
            $safe->outgoings = $request->paid;
            $safe->balance = $last->balance -  $request->paid;
            $safe->note = 'تكمله اقساط منتجات كانتين';
            $safe->save();
            $invoice_history->save();
            $supplier_invoices->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }
        }

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->outgoings = $safe->outgoings ;
        $finalsafe->balance = $final->balance - $safe->outgoings ;
        $finalsafe->note = 'دفع اقساط للموردين';
        $finalsafe->save();

        return redirect()->route('supplierinvoices.index')->with('message', "تم الدفع بنجاح");


    }

    public function destroy($id)
    {
        $invoice = InvoicePurchase::find($id)->delete();
        return redirect()->route('supplierinvoices.index')->with('message', "تم المسح بنجاح");
    }
}
