<?php

namespace App\Http\Controllers;

use App\Models\DonationInvoicePurchase;
use App\Models\Safe;
use App\Models\SafeDonation;
use Illuminate\Http\Request;

class DonationInvoicePurchaseController extends Controller
{

    public function index()
    {
        $invoices = DonationInvoicePurchase::all();
        return view('backend.donationinvoicepurchases.index' , compact('invoices'));
    }


    public function create()
    {
        return view('backend.donationinvoicepurchases.create');

    }


    public function store(Request $request)
    {
        $donation = new DonationInvoicePurchase();
        $donation->name = $request->name;
        $donation->phone =$request->phone;
        $donation->paid = $request->paid;
        $donation->note = $request->note;
        $donation->save();

        //update Safe
        $safe = new SafeDonation();
        $last = SafeDonation::orderBy('id', 'DESC')->first();
        $safe->income = $donation->paid ;
        $safe->balance = $last->balance + $donation->paid ;
        $safe->note = 'تبرع';
        $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من المتبرعين';
        $finalsafe->save();

        return redirect()->route('donationinvoicepurchases.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }


    public function show($id)
    {
        $invoice = DonationInvoicePurchase::find($id);
        return view('backend.donationinvoicepurchases.show' , compact('invoice'));
    }




    public function destroy($id)
    {
        $invoice = DonationInvoicePurchase::find($id)->delete();
        return redirect()->route('donationinvoicepurchases.index')->with('message', "تم الحذف الفاتورة بنجاح");

    }
}
