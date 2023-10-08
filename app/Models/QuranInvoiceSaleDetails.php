<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuranInvoiceSaleDetails extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function invoice_sale(){
        return $this->belongsTo(QuranInvoiceSale::class, 'invoice_sale_id');
    }
}
