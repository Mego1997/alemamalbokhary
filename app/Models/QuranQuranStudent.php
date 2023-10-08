<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuranQuranStudent extends Model
{
    use HasFactory;
    protected $guarded =['id'];


    public function quranstudent()
    {
        return $this->belongsTo(QuranStudent::class, 'quran_student_id');
    }

    public function quran()
    {
        return $this->belongsTo(Quran::class, 'quran_id');
    }

}
