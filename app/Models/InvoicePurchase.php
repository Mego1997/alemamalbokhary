<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePurchase extends Model
{
    use HasFactory;
     protected $guarded =['id'];

    public function suppliers(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function supplier_types()
    {
        return $this->belongsTo(SupplierType::class, 'type_id');
    }

    public function invoice_details(){
        return $this->hasMany(InvoicePurchasesDetails::class);
    }

    public function invoice_history(){
        return $this->hasMany(InvoicePurchasesHistory::class);
    }

   
}
