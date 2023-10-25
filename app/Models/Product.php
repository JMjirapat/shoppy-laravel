<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'image',
        'description',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function discount(){
        return $this->hasOne(Discount::class);
    }

    public function gift_more(){
        return $this->hasOne(GiftMore::class);
    }

    public function cart_items(){
        return $this->hasMany(CartItem::class);
    }

    public function order_items(){
        return $this->hasMany(OrderItem::class);
    }
}