<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusSubscription extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function students(){
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function locations(){
        return $this->belongsTo(Locations::class, 'location_id');
    }

    public function bussubscriptionhistory(){
        return $this->hasMany(BusSubscriptionHistory::class);
    }

}
