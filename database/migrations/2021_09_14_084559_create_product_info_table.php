<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_info', function (Blueprint $table) {
            $table->integer('ProductID')->unsigned();
            $table->text('ProdName');
            $table->integer('CategoryNo')->unsigned();
            $table->binary('ProductIMG');
            $table->integer('VendorNo')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_product__info');
    }
}
