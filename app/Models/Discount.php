<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    public $incrementing = false;

    protected $fillable = [
        'amount',
    ];
    
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
