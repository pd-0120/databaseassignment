<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ParcelDelivery', function (Blueprint $table) {
            $table->id('ParcelID');
            $table->date('DeliveryDate')->nullable();
            $table->enum('DeliveryStatus', ['Delivered', 'Lost', 'Damaged'])->nullable();
            $table->smallInteger('NumberOfAttempts')->default(1);
            $table->foreignId('EmployeeID')->constrained('Employee', 'EmployeeID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ParcelDelivery');
    }
}
