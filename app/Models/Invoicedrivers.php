<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Drivers;

class Invoicedrivers extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function invoices_details(){
        return $this->hasMany(Invoice_drivers_details::class);
    }
    public function drivers(){
        return $this->belongsTo(Drivers::class, 'driver_id');
    }




}
