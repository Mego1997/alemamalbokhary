<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SafeHadana extends Model
{
    use HasFactory;
    protected $guarded =['id'];

}
