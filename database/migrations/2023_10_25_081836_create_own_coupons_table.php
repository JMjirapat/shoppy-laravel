<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('own_coupons', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('coupon_id')->unsigned();
            // Other columns
            $table->primary(['user_id', 'coupon_id']);
            $table->boolean('is_used');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('own_coupons');
    }
};
