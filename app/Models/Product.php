<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = ['name', 'img', 'description', 'price', 'quantity', 'sold', 'views', 'category_id','updated_at'];

    public static function allproduct(){

        return Product::all();

    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public static function getProductsByCategory($category_id)
    {
        return self::where('category_id', $category_id);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public static function latestProducts() {
        return self::orderBy('created_at', 'desc')->take(5)->get();
    }

    public static function mostViewed() {
        return self::where('views', '>', 50)
                    ->orderBy('views', 'desc')
                    ->take(5)
                    ->get();
    }

    public static function oldestProducts() {
        return self::orderBy('created_at', 'asc')->take(5)->get();
    }
}
