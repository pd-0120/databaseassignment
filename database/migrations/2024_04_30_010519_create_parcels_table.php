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
            $table->string('ReceiverName')->nullable();
            $table->string('ReceiverAddress')->nullable();
            $table->bigInteger('ReceiverPhone')->nullable();
            $table->foreignId('ContractID')->constrained('Contract', 'ContractID');
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
