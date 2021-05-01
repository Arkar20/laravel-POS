<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Delivery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $with = ['delivery', 'customer'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function delivery()
    {
        return $this->belongsTo(Delivery::class);
    }
    public function getCartAttribute($value)
    {
        return unserialize($value);
    }
    // public static function boot()
    // {
    //     parent::boot();
    //     static::addGlobalScope('total_orders_count', function () {
    //         return Order::all()->count();
    //     });
    // }
    public function totalOrders()
    {
        return Order::all()->count();
    }
    public function totalRevenue()
    {
        return Order::all()->sum(function ($order) {
            return $order->total_cost;
        });
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'order_products',
            'order_id',
            'product_id'
        );
    }
}
