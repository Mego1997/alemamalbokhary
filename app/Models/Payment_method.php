<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function hadana_invoices_history(){
        return $this->hasMany(Hadana_invoices_history::class);
    }
    public function hadana_invoices(){
        return $this->hasMany(Hadana_invoices::class);
    }


    public function book_invoices(){
        return $this->hasMany(BookInvoice::class);
    }

    public function book_invoices_history(){
        return $this->hasMany(BookInvoiceHistory::class);
    }

    public function clothes_invoices()
    {
        return $this->hasMany(ClothesInvoice::class);
    }

    public function clothes_invoices_history()
    {
        return $this->hasMany(ClothesInvoiceHistory::class);
    }


    public function invoice_sale()
    {
        return $this->hasMany(InvoiceSale::class);
    }

    public function quran_invoice_sale()
    {
        return $this->hasMany(QuranInvoiceSale::class);
    }

}
