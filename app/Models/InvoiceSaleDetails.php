<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSaleDetails extends Model
{
    use HasFactory;
    
    protected $guarded =['id'];

    public function invoice_sale(){
        return $this->belongsTo(InvoiceSale::class, 'invoice_sale_id');
    }
}
