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
            $table->increments('PreOrderID');
            $table->integer('ProductID')->unsigned()->nullable();
            $table->integer('CustomerID')->unsigned()->nullable();
            $table->integer('PreOrderAmt');
            $table->float('PrePrice');
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
