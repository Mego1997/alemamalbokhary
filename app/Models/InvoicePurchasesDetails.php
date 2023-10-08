<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePurchasesDetails extends Model
{
    use HasFactory;
    protected $guarded =['id'];
   
    public function invosices(){
        return $this->belongsTo(InvoicePurchase::class, 'invoice_id');
    }
}
