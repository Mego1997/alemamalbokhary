<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function invoices()
{
    return $this->hasMany(Donation_invoices::class);
}


    public function reasons()
    {
        return $this->belongsTo(Reasone::class, 'reason_id');
    }


}
