<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
//trate name

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'vat_number',
        'address',
        'description',
        'slug',
        'image',
        'phone',
        'user_id'
    ];

    /*public static function getId($id) {
        return $this->id = $id;
    }*/ 
    public static function generateSlug(string $name) {
        return Str::slug($name, '-');
    }   
    
    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function dishes() {
        return $this->hasMany(Dish::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
