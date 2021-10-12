<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('customer', function (Blueprint $table)
        // {
        //     $table->foreign('serviceEmp')->references('EmployeeID')->on('employee');
        // });

        // Schema::table('employee', function (Blueprint $table)
        // {
        //     $table->foreign('DeptNo')->references('DeptNo')->on('department');
        // });

        // Schema::table('order_status', function (Blueprint $table)
        // {
        //     $table->foreign('ReceiptID')->references('ReceiptID')->on('payment');
        // });

        // Schema::table('payment', function (Blueprint $table)
        // {
        //     $table->foreign('ProductID')->references('ProductID')->on('product_stock');
        //     $table->foreign('CustomerID')->references('CustomerID')->on('customer');
        // });

        // Schema::table('preorder_payment', function (Blueprint $table)
        // {
        //     $table->foreign('ProductID')->references('ProductID')->on('product_stock');
        //     $table->foreign('CustomerID')->references('CustomerID')->on('customer');
        // });

        // Schema::table('product_info', function (Blueprint $table)
        // {
        //     $table->foreign('ProductID')->references('ProductID')->on('product_stock');
        //     $table->foreign('VendorNo')->references('VendorNo')->on('vendor');
        //     $table->foreign('CategoryNo')->references('CategoryNo')->on('category');
        // });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_key');
    }
}
