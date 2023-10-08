<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function suppliers(){
        return $this->hasMany(Supplier::class);
    }

    public function invoices_purchase()
    {
        return $this->hasMany(InvoicePurchase::class);
    }

    public function invoices_purchase_history()
    {
        return $this->hasMany(InvoicePurchasesHistory::class);
    }

}
