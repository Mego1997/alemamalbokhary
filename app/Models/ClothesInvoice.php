<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClothesInvoice extends Model
{
    use HasFactory;
    
    protected $guarded =['id'];

    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function payment_method(){
        return $this->belongsTo(Payment_method::class, 'payment_method_id');
    }


    public function clothesinventory(){
        return $this->belongsTo(ClothesInventory::class, 'requested_price_id');
    }


    public function invoices(){
        return $this->hasMany(ClothesInvoiceHistory::class);
    }
}
