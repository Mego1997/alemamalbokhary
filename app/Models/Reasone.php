<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reasone extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
