<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Employee;
use App\Models\InvoicePurchase;
use App\Models\Safe;
use App\Models\SafeBook;
use App\Models\SafeClothes;
use App\Models\SafeDonation;
use App\Models\SafeHadana;
use App\Models\SafeQuran;
use App\Models\Student;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $safe = SafeDonation::orderBy('id', 'DESC')->first();
        $safeD = SafeDonation::all();
        return view('backend.user', compact('safe','safeD'));
    }

    public function adminHome()
    {

        $safe = Safe::orderBy('id', 'DESC')->first();
        $safeD = Safe::all();
        $hadana = SafeHadana::orderBy('id', 'DESC')->first();
        $hadanaa = SafeHadana::all();
        $books = SafeBook::orderBy('id', 'DESC')->first();
        $clothes = SafeClothes::orderBy('id', 'DESC')->first();
        $donation = SafeDonation::orderBy('id', 'DESC')->first();
        $donations = SafeDonation::all();
        $inbook = InvoicePurchase::where('type_id',1)->get();
        $inshop = InvoicePurchase::where('type_id',3)->get();
        $inclothes = InvoicePurchase::where('type_id',2)->get();
        $students = Student::all();
        $employees = Employee::all();
        $suppliers = Supplier::all();
        $classes = Classes::all();


        return view('backend.home', compact('hadana','books','clothes','hadanaa','safe','safeD','donation','donations','inbook','inshop','inclothes','students','suppliers','employees','classes'));
    }

    public function managerHome()
    {
        return view('backend.students.index');
    }

    public function owner()
    {

        $safe = Safe::orderBy('id', 'DESC')->first();
        $safeD = Safe::whereDate('created_at','=',now()->format('Y-m-d'))->get() ;
        $hadana = SafeHadana::orderBy('id', 'DESC')->first();
        $hadanaa = SafeHadana::whereDate('created_at','=',now()->format('Y-m-d'))->get() ;
        $books = SafeBook::orderBy('id', 'DESC')->first();
        $bookss = SafeBook::whereDate('created_at','=',now()->format('Y-m-d'))->get() ;
        $clothes = SafeClothes::orderBy('id', 'DESC')->first();
        $clothess = SafeClothes::whereDate('created_at','=',now()->format('Y-m-d'))->get() ;
        $donation = SafeDonation::orderBy('id', 'DESC')->first();
        $donations = SafeDonation::whereDate('created_at','=',now()->format('Y-m-d'))->get() ;
        $inbook = InvoicePurchase::where('type_id',1)->get();
        $inshop = InvoicePurchase::where('type_id',3)->get();
        $inclothes = InvoicePurchase::where('type_id',2)->get();
        $students = Student::all();
        $employees = Employee::all();
        $suppliers = Supplier::all();
        $classes = Classes::all();
        $quran = SafeQuran::orderBy('id', 'DESC')->first();
        $qurans = SafeQuran::whereDate('created_at','=',now()->format('Y-m-d'))->get() ;


        return view('backend.owner', compact('hadana','books','clothes','hadanaa','safe','safeD','donation','donations','inbook','inshop','inclothes','students','suppliers','employees','classes','bookss','clothess','quran','qurans'));    }

}
