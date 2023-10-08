<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    use HasFactory;
    protected $guarded =['id'];
    public function invoicedrivers()
{
    return $this->hasMany(Invoicedrivers::class);
}

}
