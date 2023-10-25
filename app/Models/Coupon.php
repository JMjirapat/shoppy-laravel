<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'discount'
    ];

    public function owned_coupons(){
        return $this->hasMany(OwnCoupon::class);
    }
}
