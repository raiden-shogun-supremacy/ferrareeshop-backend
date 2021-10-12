<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreorderPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preorder_payment', function (Blueprint $table) {
            $table->integer('ProductID')->unsigned();
            $table->integer('CustomerID')->unsigned();
            $table->integer('PreOrderAmt');
            $table->integer('PrePrice');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_preorder__payment');
    }
}
