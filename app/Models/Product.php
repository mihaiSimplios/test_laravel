<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    protected $table = 'products';

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public static function getHighRatingReviews()
    {
        return self::with('reviews')->whereHas('reviews', function ($query) {
            $query->where('rating', '>=', 4);
        })->get();
    }
}
