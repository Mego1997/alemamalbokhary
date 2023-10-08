<?php

namespace App\Http\Controllers;

use App\Models\BusSubscription;
use App\Models\Hadana_invoices;
use App\Models\Safe;
use App\Models\SafeHadana;
use App\Models\Withdrawal;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices = Withdrawal::all();
        return view('backend.withdrawal.index' , compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function hadana($id)
    {
        $invoice = Hadana_invoices::where('student_id',$id)->first();
        $invoicee = BusSubscription::where('student_id',$id)->first();


        return view('backend.withdrawal.create' , compact('invoice','invoicee'));

    }


    public function store(Request $request)
    {
//        dd($request);
        $check = SafeHadana::orderBy('id', 'DESC')->first();
        if ($check->balance >= $request->paid){
        $invoice = new Withdrawal();
        $invoice->student_id = $request->student_id;
        $invoice->paid = $request->paid;
        $invoice->reason = $request->reason;
        $invoice->note = $request->note;
        $invoice->save();

            //update SafeHadana
            $safe = new SafeHadana();
            $last = SafeHadana::orderBy('id', 'DESC')->first();
            $safe->outgoings = $invoice->paid ;
            $safe->balance = $last->balance - $invoice->paid ;
            $safe->note = 'انسحابات';
            $safe->save();

            //update Safe
            $finalsafe = new Safe();
            $final = Safe::orderBy('id', 'DESC')->first();
            $finalsafe->outgoings = $safe->outgoings ;
            $finalsafe->balance = $final->balance - $safe->outgoings ;
            $finalsafe->note = 'انسحابات';
            $finalsafe->save();

            return redirect()->route('withdrawal.index.index')->with('message', "تم اضافة الفاتورة بنجاح");
        }else{
            return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
        }




    }

    public function show($id)
    {
        $invoice = Withdrawal::where('student_id',$id)->first();

        return view('backend.withdrawal.show' , compact('invoice'));


    }


}
