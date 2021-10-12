<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('EmployeeID');
            $table->text('Fname');
            $table->text('Lname');
            $table->integer('DeptNo')->unsigned();
            $table->text('Username');
            $table->text('Password');
            $table->Boolean('IsHead');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_employee');
    }
}
