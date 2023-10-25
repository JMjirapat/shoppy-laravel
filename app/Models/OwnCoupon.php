<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnCoupon extends Model
{
    use HasFactory;
    protected $primaryKey = ['coupon_id', 'user_id'];
    public $incrementing = false;

    protected $fillable = [
        'is_used',
    ];

    protected $attributes = [
        'is_used' => false, // 1 คือ ID ของ tier "standard"
    ];

    public function coupon(){
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
