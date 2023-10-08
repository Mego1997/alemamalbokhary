<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierInvoiceHistory extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function suppliers(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }


    public function invoices_history(){
        return $this->belongsTo(SupplierInvoice::class, 'invoice_id');
    }
}
