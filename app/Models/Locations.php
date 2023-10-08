<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function bus()
    {
        return $this->hasMany(BusSubscription::class);
    }

    public function bushistory()
    {
        return $this->hasMany(BusSubscriptionHistory::class);
    }
}
