<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceShopDetails extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function invoice_shop(){
        return $this->belongsTo(InvoiceShop::class, 'invoice_id');
    }

   
}
