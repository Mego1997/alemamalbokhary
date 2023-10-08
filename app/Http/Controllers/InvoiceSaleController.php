<?php

namespace App\Http\Controllers;

use App\Models\Safe;
use Illuminate\Http\Request;
use App\Models\BookInventory;
use App\Models\BookInvoice;
use App\Models\BookInvoiceHistory;
use App\Models\ClothesInventory;
use App\Models\ClothesInvoice;
use App\Models\InvoiceSale;
use App\Models\InvoiceSaleDetails;
use App\Models\Payment_method;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\Student;
use App\Models\SupplierType;

class InvoiceSaleController extends Controller
{

    public function index()
    {
        $invoicess = InvoiceSale::orderBy('created_at', 'DESC')->get();
        return view('backend.bookinvoices.index', compact('invoicess'));
    }


    public function create()
    {
        $students = Student::where('withdrawal',0)->get();
        $types = SupplierType::where('id',1)
            ->orwhere('id',2)
            ->get();
        $payment_methods = Payment_method::all();
        return view('backend.invoicesale.create', compact('students', 'payment_methods','types'));
    }


    public function getClass(Request $request)
    {
        if($request->type_id == 1){
            $data['AllClass'] = BookInventory::where('quantity','>',0)->get(["id","name","student_price"]);
            return response()->json($data);
        }elseif($request->type_id == 2){
            $data['AllClass'] = ClothesInventory::where('quantity','>',0)->get(["id","name","student_price"]);
            return response()->json($data);
        }

    }


    public function getPrice(Request $request)
    {

        if($request->typee_id == 1){
            $data['AllPrices'] = BookInventory::where('id',$request->type_id)->get(["student_price",'quantity']);
            return response()->json($data);
        }elseif($request->typee_id == 2){

             $data['AllPrices'] = ClothesInventory::where('id',$request->type_id)->get(["student_price",'quantity']);
             return response()->json($data);
        }



    }


    public function store(Request $request)
    {

        if($request->type== 1){

        $invoice = new InvoiceSale();
        $invoice->student_id  = $request->student_id;
        $invoice->type  = 'كتب';
        $invoice->paid  = 0 ;
        $invoice->discount  = 0 ;
        $invoice->total  = 0 ;
        $invoice->payment_method_id  = 1;
        $invoice->note  = $request->note;
        $invoice->save();
        foreach ($request->input('class')  as $key=> $class ) {



        $final_invoices = InvoiceSale::find( $invoice->id);
        $inventory = BookInventory::find($class);

        $invoice_details = new InvoiceSaleDetails();
        $invoice_details->invoice_sale_id  = $final_invoices->id;
        $invoice_details->class  = $inventory->name;
        $invoice_details->paid  = $request->paid[$key];
        $invoice_details->discount  = $request->discount[$key];
        $invoice_details->total = $request->total[$key];
        $invoice_details->save();
        //update inventory
        $inventory->quantity = $inventory->quantity - 1;
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
        $invoice = new InvoiceSale();
        $invoice->student_id  = $request->student_id;
        $invoice->type  = 'ملابس';
        $invoice->paid  = 0 ;
        $invoice->discount  = 0 ;
        $invoice->total  = 0 ;
        $invoice->payment_method_id  = 1;
        $invoice->note  = $request->note;
        $invoice->save();
        foreach ($request->input('class')  as $key=> $class ) {



        $final_invoices = InvoiceSale::find( $invoice->id);
        $inventory = ClothesInventory::find($class);

        $invoice_details = new InvoiceSaleDetails();
        $invoice_details->invoice_sale_id  = $final_invoices->id;
        $invoice_details->class  = $inventory->name;
        $invoice_details->paid  = $request->paid[$key];
        $invoice_details->discount  = $request->discount[$key];
        $invoice_details->total = $request->total[$key];
        $invoice_details->save();
        //update inventory
        $inventory->quantity = $inventory->quantity - 1;
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


        return redirect()->route('bookinvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }


    public function show($id)
    {
        $invoice = InvoiceSale::find($id);
        $invoices = InvoiceSaleDetails::where('invoice_sale_id', $id)->get();
        return view('backend.bookinvoices.show', compact('invoices' , 'invoice'));
    }


}
