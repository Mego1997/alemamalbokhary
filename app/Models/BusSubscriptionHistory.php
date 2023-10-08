<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSubscriptionHistory extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function locations(){
        return $this->belongsTo(Locations::class, 'location_id');
    }

    public function bussubscription(){
        return $this->belongsTo(BusSubscription::class, 'bus_subscription_id');
    }
}
