<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Employee', function (Blueprint $table) {
            $table->id('EmployeeID');
            $table->string('FirstName', 45);
            $table->string('LastName', 45);
            $table->string('Phone', 20);
            $table->string('Email', 45);
            $table->date('DateOfBirth')->nullable();
            $table->string('TFN')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Employee');
    }
}
