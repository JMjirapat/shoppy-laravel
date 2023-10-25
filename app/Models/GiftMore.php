<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftMore extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    public $incrementing = false;

    protected $fillable = [
        'gift_amount',
        'expected_amount',
    ];
    
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
