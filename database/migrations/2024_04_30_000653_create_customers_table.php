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
            $table->string('FirstName',45 );
            $table->string('LastName', 45);
            $table->string('Street', 45);
            $table->string('City', 45);
            $table->string('State', 45);
            $table->integer('Pincode', 10);
            $table->bigInteger('Phone')->unique();
            $table->string('Email', 45)->unique();
            $table->date('DateOfBirth')->nullable();
        });

        Schema::table('Customer', function (Blueprint $table) {
            $table->index('LastName');
            $table->index('Phone');
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
