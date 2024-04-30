<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompensationClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CompensationClaim', function (Blueprint $table) {
            $table->id('ClaimID');
            $table->foreignId('CustomerID')->constrained('Customer', 'CustomerID');
            $table->foreignId('ParcelID')->constrained('Parcel', 'ParcelID');
            $table->double('ClaimAmount')->default(0.00);
            $table->string('ClaimReason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CompensationClaim');
    }
}
