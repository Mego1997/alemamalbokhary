<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePurchasesHistory extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function suppliers(){
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

    public function invosices(){
        return $this->belongsTo(InvoicePurchase::class, 'invoice_id');
    }

    public function supplier_types()
    {
        return $this->belongsTo(SupplierType::class, 'type_id');
    }
}
