<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('CustomerID');
            $table->text('Fname');
            $table->text('Lname');
            $table->text('Address');
            $table->text('PostalCode');
            $table->text('Phone');
            $table->integer('Point');
            $table->integer('serviceEmp')->unsigned();
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_customer');
    }
}
