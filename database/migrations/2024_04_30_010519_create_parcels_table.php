<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Parcel', function (Blueprint $table) {
            $table->id('ParcelID');
            $table->enum('ParcelType', ['Small', 'Medium', 'Large']);
            $table->double('Length', 10,2)->nullable();
            $table->double('Width', 10, 2)->nullable();
            $table->double('Height', 10, 2)->nullable();
            $table->string('ReceiverFirstName')->nullable();
            $table->string('ReceiverLastName')->nullable();
            $table->string('ReceiverStreet')->nullable();
            $table->string('ReceiverCity')->nullable();
            $table->string('ReceiverState')->nullable();
            $table->integer('ReceiverPincode')->nullable();
            $table->integer('ReceiverPhone')->nullable();
            $table->foreignId('ContractID')->constrained('Contract', 'ContractID')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Parcel');
    }
}
