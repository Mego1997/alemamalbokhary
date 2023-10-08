<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSet extends Model
{
    use HasFactory;
    protected $guarded =['id'];


    public function teacher()
    {
        return $this->belongsTo(Employee::class, 'teacher_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }

}
