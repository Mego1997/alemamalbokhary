<?php

namespace App\Http\Controllers;

use App\Models\BusSubscription;
use App\Models\BusSubscriptionHistory;
use App\Models\Locations;
use App\Models\Safe;
use App\Models\SafeHadana;
use App\Models\Student;
use Illuminate\Http\Request;

class BusSubscriptionController extends Controller
{

    public function index()
    {
        $invoices = BusSubscription::all();
        return view('backend.bussubscription.index', compact('invoices'));
    }
    public function getLocationPrice(Request $request)
    {
        $data['AllPrices'] = Locations::where("id",$request->location_id)
            ->get(["id","price"]);

        return response()->json($data);
    }


    public function create()
    {
        $students = Student::where('withdrawal',0)->get();
        $locations = Locations::all();
        return view('backend.bussubscription.create', compact('students', 'locations'));
    }


    public function store(Request $request)
    {
//        dd($request);
          $invoice = new BusSubscription();
          $invoice->price  = $request->price;
          $invoice->discount  = $request->discount;
          $invoice->total  = $request->total;
          $invoice->paid  = $request->paid;
          $invoice->remaning  = $request->remaning;
          $invoice->note  = $request->note;
          $invoice->student_id   = $request->student_id;
          $invoice->location_id  = $request->location;
          $invoice->save();

          $invoice_history = new BusSubscriptionHistory();
          $invoice_history->bus_subscription_id  = $invoice->id;
          $invoice_history->price  = $invoice->price;
          $invoice_history->discount  = $invoice->discount;
          $invoice_history->total  = $invoice->total;
          $invoice_history->paid  = $invoice->paid;
          $invoice_history->remaning  = $invoice->remaning;
          $invoice_history->note  = $invoice->note;
          $invoice_history->student_id   = $invoice->student_id;
          $invoice_history->location_id  = $invoice->location_id;
          $invoice_history->save();

        //update Safe
          $safe = new SafeHadana();
          $last = SafeHadana::orderBy('id', 'DESC')->first();
          $safe->income =  $invoice->paid ;
          $safe->balance = $last->balance +  $invoice->paid ;
          $safe->note = 'تحصيل اشتراكات الباص';
          $safe->save();

        //update Safe
          $finalsafe = new Safe();
          $final = Safe::orderBy('id', 'DESC')->first();
          $finalsafe->income = $safe->income ;
          $finalsafe->balance = $final->balance + $safe->income ;
          $finalsafe->note = 'تحصيل اموال من اشتراكات الباص';
          $finalsafe->save();

       return redirect()->route('bussubscription.index')->with('message', "تم الاشتراك بنجاح");

    }


    public function show($id)
    {
        $invoice = BusSubscription::find($id);
        return view('backend.bussubscription.show', compact('invoice'));
    }


    public function edit($id)
    {
        $invoice = BusSubscription::find($id);
        return view('backend.bussubscription.edit' , compact('invoice'));
    }


    public function update(Request $request, $id)
    {
//        dd($request);

        $hadana_invoices = BusSubscription::find($id);
        $invoice_history = new BusSubscriptionHistory();
        $invoice_history->bus_subscription_id  = $hadana_invoices->id;
        $invoice_history->discount   = 0  ;
        $invoice_history->total   = $hadana_invoices->remaning  ;
        $invoice_history->paid  = $request->paid;
        $invoice_history->price  = $hadana_invoices->price;
        $invoice_history->note  = $hadana_invoices->note;
        $invoice_history->remaning =$hadana_invoices->remaning - $request->paid;
        $invoice_history->student_id  = $hadana_invoices->student_id ;
        $invoice_history->location_id   = $hadana_invoices->location_id  ;
        $invoice_history->save();


        $a = $request->remaning ;
        $b = $request->paid ;
        $hadana_invoices->paid  = $request->paid + $hadana_invoices->paid  ;
        $hadana_invoices->note  = $request->note ;
        $hadana_invoices->remaning = $a - $b;
        $hadana_invoices->student_id  =$hadana_invoices->student_id ;
        $hadana_invoices->location_id   = $hadana_invoices->location_id  ;
        $hadana_invoices->total   = $hadana_invoices->total  ;
        $hadana_invoices->price   = $hadana_invoices->price  ;
        $hadana_invoices->discount   = $hadana_invoices->discount  ;

        $hadana_invoices->save();

        //update Safe
        $safe = new SafeHadana();
        $last = SafeHadana::orderBy('id', 'DESC')->first();
        $safe->income =  $request->paid ;
        $safe->balance = $last->balance +  $request->paid ;
        $safe->note = 'تحصيل اشتراكات الباص';
        $safe->save();

        //update Safe
        $finalsafe = new Safe();
        $final = Safe::orderBy('id', 'DESC')->first();
        $finalsafe->income = $safe->income ;
        $finalsafe->balance = $final->balance + $safe->income ;
        $finalsafe->note = 'تحصيل اموال من اشتراكات الباص';
        $finalsafe->save();

        return redirect()->route('bussubscription.index')->with('message', "تم الدفع بنجاح");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusSubscription $busSubscription)
    {
        //
    }
}
