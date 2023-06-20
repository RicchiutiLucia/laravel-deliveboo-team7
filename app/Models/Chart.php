<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Chart extends Model
{
    use HasFactory;
    protected $fillable = [
        'restaurant_id'
    ];

}