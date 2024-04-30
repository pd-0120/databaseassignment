<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customer', function (Blueprint $table) {
            $table->id('CustomerID');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Address');
            $table->bigInteger('Phone');
            $table->string('Email');
            $table->date('DateOfBirth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Customer');
    }
}
