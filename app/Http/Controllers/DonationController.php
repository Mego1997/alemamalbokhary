<?php

namespace App\Http\Controllers;
use App\Models\Donation;
use App\Models\Drivers;
use App\Models\Employee;
use App\Models\Reasone;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

      $donations = Donation::all();
      return view('backend.donations.index' ,compact('donations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reasons = Reasone::all();
        return view('backend.donations.create',compact('reasons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('donations'), $imageName);

            $donation = new Donation();
            $donation->reason_id = $request->reason;
            $donation->name = $request->name;
            $donation->gender = $request->gender;
            $donation->address = $request->address;
            $donation->phone = $request->phone;
            $donation->raqam = $request->code;
            $donation->birthday = $request->birthday;
            $donation->img_id = $imageName;
            $donation->save();

        return redirect()->route('donations.index')->with('message', "تم الاضافة بنجاح");

    }


    public function show($id)
    {
        $donation = Donation::find($id);

        return view('backend.donations.show', compact('donation'));
    }


    public function edit($id)
    {
        $donation = Donation::find($id);
        $reasons = Reasone::all();

        return view('backend.donations.edit', compact('donation','reasons'));

    }


    public function update(Request $request, $id)
    {
        $donation = Donation::find($id);

        if (!$request->image){
            $imageName = $donation->img_id;
        }else{
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('donations'), $imageName);
        }

        $donation->reason_id = $request->reason;
        $donation->name = $request->name;
        $donation->gender = $request->gender;
        $donation->address = $request->address;
        $donation->phone = $request->phone;
        $donation->raqam = $request->code;
        $donation->birthday = $request->birthday;
        $donation->img_id = $imageName;
        $donation->save();

        return redirect()->route('donations.index')->with('message', "تم التعديل بنجاح");
    }


    public function destroy($id)
    {
        $donation = Donation::find($id)->delete();
        return redirect()->route('donations.index')->with('message', "تم الحذف بنجاح");


    }
}
