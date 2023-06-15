<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_price',
        'name',
        'lastname',
        'address',
        'email',
        'phone',
        'status'
    ];

    public function dishes() {
        return $this->belongsToMany(Dish::class);
    }
}
