<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookInvoiceHistory extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function payment_method(){
        return $this->belongsTo(Payment_method::class, 'payment_method_id');
    }


    public function bookinventory(){
        return $this->belongsTo(BookInventory::class, 'requested_price_id');
    }

    public function invoices_history(){
        return $this->belongsTo(BookInvoice::class, 'invoice_id');
    }

}
