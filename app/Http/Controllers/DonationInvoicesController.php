<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Donation_invoices;
use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\SafeDonation;
use App\Models\SafeHadana;
use Illuminate\Http\Request;

class DonationInvoicesController extends Controller
{

    public function index()
    {
        $invoices = Donation_invoices::all();
        return view('backend.donationsinvoices.index' , compact('invoices'));
    }


    public function create()
    {
        $donations = Donation::all();
        return view('backend.donationsinvoices.create' , compact('donations'));
    }


    public function store(Request $request)
    {
        $donation = new Donation_invoices();
        $donation->donation_id = $request->donat_id;
        $donation->paid = $request->paid;
        $donation->note = $request->note;

        if ($request->safe == 1 ){
            //update SafeDonations
            $safe = new SafeDonation();
            $last = SafeDonation::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid){
            $safe->outgoings = $donation->paid ;
            $safe->balance = $last->balance - $donation->paid ;
            $safe->note = 'تبرعات';
            $safe->save();
            $donation->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }
        }elseif ($request->safe == 2){
            //update SafeBook
            $safe = new SafeBook();
            $last = SafeBook::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid){
                $safe->outgoings = $donation->paid ;
                $safe->balance = $last->balance - $donation->paid ;
                $safe->note = 'تبرعات';
                $safe->save();
                $donation->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }
        }elseif ($request->safe == 3){
            //update SafeClothes
            $safe = new SafeClothes();
            $last = SafeClothes::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid){
                $safe->outgoings = $donation->paid ;
                $safe->balance = $last->balance - $donation->paid ;
                $safe->note = 'تبرعات';
                $safe->save();
                $donation->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }
        }elseif ($request->safe == 4){
            //update SafeHadana
            $safe = new SafeHadana();
            $last = SafeHadana::orderBy('id', 'DESC')->first();
            if ($last->balance >= $request->paid){
                $safe->outgoings = $donation->paid ;
                $safe->balance = $last->balance - $donation->paid ;
                $safe->note = 'تبرعات';
                $safe->save();
                $donation->save();
            }else{
                return redirect()->back()->with('error', "لايوجد رصيد كافي بالخزنة");
            }
        }

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->outgoings = $safe->outgoings ;
        $finalsafe->balance = $final->balance - $safe->outgoings ;
        $finalsafe->note = 'دفع فلوس تبرعات';
        $finalsafe->save();

        return redirect()->route('donationsinvoices.index')->with('message', "تم اضافة الفاتورة بنجاح");

    }


    public function show($id)
    {
        $invoice = Donation_invoices::find($id);
        return view('backend.donationsinvoices.show' , compact('invoice'));
    }




    public function destroy($id)
    {
        $invoice = Donation_invoices::find($id)->delete();
        return redirect()->route('donationsinvoices.index')->with('message', "تم الحذف الفاتورة بنجاح");


    }
}
