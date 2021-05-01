<?php

namespace App\Models;

use App\Models\Size;
use App\Models\Color;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $with = ['color', 'size', 'category'];

    protected $guarded = [];
    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('order_counts', function ($query) {
            return $query->withCount('orders');
        });
    }
    public function color()
    {
        return $this->belongsTo(Color::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getProductDetails()
    {
        return $this->size->size .
            '(-' .
            $this->color->color .
            '-' .
            $this->category->thickness .
            '-)' .
            '-' .
            $this->category->madein;
    }
    public function orders()
    {
        return $this->belongsToMany(
            Order::class,
            'order_products',
            'product_id',
            'order_id'
        );
    }
}
