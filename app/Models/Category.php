<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public static function generateSlug(string $name) {
        return Str::slug($name, '-');
    }

    public function restaurant() {
        return $this->belongsToMany(Restaurant::class);
    }
}
