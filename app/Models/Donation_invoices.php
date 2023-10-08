<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation_invoices extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function donations(){
        return $this->belongsTo(Donation::class, 'donation_id');
    }
}
