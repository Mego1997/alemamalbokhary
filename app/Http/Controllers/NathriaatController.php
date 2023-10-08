<?php

namespace App\Http\Controllers;

use App\Models\Nathriaat;
use App\Models\Safe;
use App\Models\SafeHadana;
use Illuminate\Http\Request;

class NathriaatController extends Controller
{

    public function index()
    {
        $invoices = Nathriaat::all();
        return view('backend.nathriaat.index' , compact('invoices'));
    }


    public function create()
    {
               return view('backend.nathriaat.create');
    }


    public function store(Request $request)
    {
        $donation = new Nathriaat();
        $donation->name = $request->name;
        $donation->phone =$request->phone;
        $donation->paid = $request->paid;
        $donation->note = $request->note;

        //update Safe
        $safe = new SafeHadana();
        $last = SafeHadana::orderBy('id', 'DESC')->first();
        if ($last->balance >= $request->paid){
            $safe->outgoings = $donation->paid ;
            $safe->balance = $last->balance - $donation->paid ;
            $safe->note = 'نثريات';
            $safe->save();
            $donation->save();
        }else{
            return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
        }

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->outgoings = $safe->outgoings ;
        $finalsafe->balance = $final->balance - $safe->outgoings ;
        $finalsafe->note = 'دفع فلوس نثريات';
        $finalsafe->save();

        return redirect()->route('nathriaat.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }


    public function show($id)
    {
        $invoice = Nathriaat::find($id);
        return view('backend.nathriaat.show' , compact('invoice'));
    }

    
   
    public function destroy($id)
    {
        $invoice = Nathriaat::find($id)->delete();
        return redirect()->route('nathriaat.index')->with('message', "تم الحذف الفاتورة بنجاح");

    }
}
