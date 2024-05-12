<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ParcelReceiver extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ParcelReceiver', function (Blueprint $table) {
            $table->id('ParcelReceiverID');
            $table->string('ReceiverFirstName')->nullable();
            $table->string('ReceiverLastName')->nullable();
            $table->string('ReceiverStreet')->nullable();
            $table->string('ReceiverCity')->nullable();
            $table->string('ReceiverState')->nullable();
            $table->integer('ReceiverPincode')->nullable();
            $table->bigInteger('ReceiverPhone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ParcelReceiver');
    }
}
