<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_drivers_details extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function invosices(){
        return $this->belongsTo(Invoicedrivers::class, 'invoice_id');
    }

}
