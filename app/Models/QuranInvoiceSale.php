<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuranInvoiceSale extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function students(){
        return $this->belongsTo(QuranStudent::class, 'student_id');
    }

    public function payment_method(){
        return $this->belongsTo(Payment_method::class, 'payment_method_id');
    }

    public function invoice(){
        return $this->hasMany(QuranInvoiceSaleDetails::class);
    }
}
