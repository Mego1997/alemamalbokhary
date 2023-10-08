<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeInvoice extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function employees()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
