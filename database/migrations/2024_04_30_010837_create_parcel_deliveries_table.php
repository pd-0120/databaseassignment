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

            $table->foreignId('ParcelID')->constrained('Parcel', 'ParcelID');
            $table->foreignId('EmployeeID')->constrained('Employee', 'EmployeeID');
            $table->primary(['ParcelID', 'EmployeeID']);
            $table->date('DeliveryDate')->nullable();
            $table->enum('DeliveryStatus', ['Delivered', 'Lost', 'Damaged'])->nullable();
            $table->smallInteger('NumberOfAttempts')->default(1);
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
