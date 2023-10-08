<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quran extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function quranset(){
        return $this->hasMany(QuranQuranStudent::class);
    }

}
