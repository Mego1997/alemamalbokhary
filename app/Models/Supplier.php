<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function suppliertypes()
    {
        return $this->belongsTo(SupplierType::class, 'type_id');
    }
    
    public function supplier_book()
    {
        return $this->hasMany(BookInventory::class);
    }

    public function supplier_clothes()
    {
        return $this->hasMany(ClothesInventory::class);
    }

    public function supplier_shop()
    {
        return $this->hasMany(ShopInventory::class);
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
