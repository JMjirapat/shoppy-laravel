<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tier extends Model
{
    use HasFactory;
    protected $table = "tiers";

    protected $fillable = [
        'accumulate',
        'discount',
        'name',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
}
