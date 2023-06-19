<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Dish extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'ingredients',
        'description',
        'image',
        'restaurant_id',
        'visible'
    ];

    public static function generateSlug(string $name)
    {
        return Str::slug($name, '-');
    }

    public function restaurant()
    {
        return $this->BelongsTo(Restaurant::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
