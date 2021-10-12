<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscountCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discount_coupon', function (Blueprint $table) {
            $table->increments('DiscountID');
            $table->text('DiscountCode');
            $table->integer('CodeAmount');
            $table->date('ValidUntil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_disount__coupon');
    }
}
