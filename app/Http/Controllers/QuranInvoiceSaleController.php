<?php

namespace App\Http\Controllers;

use App\Models\BookInventory;
use App\Models\Payment_method;
use App\Models\QuranInvoiceSale;
use App\Models\QuranInvoiceSaleDetails;
use App\Models\QuranStudent;
use App\Models\Safe;
use App\Models\SafeBook;
use Illuminate\Http\Request;

class QuranInvoiceSaleController extends Controller
{

    public function index()
    {
        $invoices = QuranInvoiceSale::all();
        return view('backend.quraninvoicesale.index', compact('invoices'));
    }


    public function create()
    {
        $students  = QuranStudent::all();
        $payment_methods = Payment_method::all();
        $books = BookInventory::all();
        return view('backend.quraninvoicesale.create', compact('students', 'payment_methods','books'));

    }

    public function getBook(Request $request)
    {
            $data['AllPrices'] = BookInventory::where('id',$request->type_id)->get(["student_price"]);
            return response()->json($data);
    }
    public function store(Request $request)
    {

//        dd($request);
        $invoice = new QuranInvoiceSale();
        $invoice->student_id  = $request->student_id;
        $invoice->type  = 'كتب';
        $invoice->paid  = 0 ;
        $invoice->discount  = 0 ;
        $invoice->total  = 0 ;
        $invoice->payment_method_id  = 1;
        $invoice->note  = $request->note;
        $invoice->save();
        foreach ($request->input('class')  as $key=> $class ) {



            $final_invoices = QuranInvoiceSale::find( $invoice->id);
            $inventory = BookInventory::find($class);

            $invoice_details = new QuranInvoiceSaleDetails();
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
        $safe->note = 'بيع كتب من دار التحفيظ';
        $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من بيع منتجات';
        $finalsafe->save();


        return redirect()->route('quraninvoicesale.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }

    public function show($id)
    {
        $invoice = QuranInvoiceSale::find($id);
        $invoices = QuranInvoiceSaleDetails::where('invoice_sale_id', $id)->get();
        return view('backend.quraninvoicesale.show', compact('invoices' , 'invoice'));
    }


}
