<?php

namespace App\Http\Controllers;

use App\Models\Hadana_invoices;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class PdfController extends Controller
{
    public function hadana( $id)
    {
        $invoice = Hadana_invoices::find($id);
        return view('backend.testPDF', compact('invoice'));
    }

    public function hadanaa( $id)
    {
        $invoice = Hadana_invoices::find($id);
        return view('backend.PDF', compact('invoice'));
    }
}
