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
        'address',
        'description',
        'slug',
        'image',
        'phone',
        'user_id'
    ];


    public static function generateSlug(string $user_id) {
        $_name =  User::find($user_id)->name;
        return Str::slug($_name, '-');
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
