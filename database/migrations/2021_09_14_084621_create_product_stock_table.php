<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stock', function (Blueprint $table) {
            $table->increments('ProductID');
            $table->text('ProductName');
            $table->text('Category');
            $table->integer('LotNo');
            $table->integer('UnitPrice');
            $table->integer('InStockAmt');
            $table->timestamp('RecordDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product__stock');
    }
}
