<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->increments('ReceiptID');
            $table->integer('ProductID')->unsigned();
            $table->text('ProductName');
            $table->integer('CustomerID')->unsigned();
            $table->text('CustomerName');
            $table->integer('TotalAmt');
            $table->float('TotalPrice');
            $table->integer('CurrentOrderPoint');
            $table->timestamp('ReceiptDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_payment');
    }
}
