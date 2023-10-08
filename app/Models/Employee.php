<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function specializations()
    {
        return $this->belongsTo(EmployeeSpecialization::class, 'specialization_id');
    }


    public function class(){
        return $this->hasMany(ClassSet::class);
    }

    public function employeeinvoices(){
        return $this->hasMany(EmployeeInvoice::class);
    }

}
