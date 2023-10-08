<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInvoice extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function customer_detail(){
        return $this->hasMany(CustomerInvoiceDetail::class);
    }

}
