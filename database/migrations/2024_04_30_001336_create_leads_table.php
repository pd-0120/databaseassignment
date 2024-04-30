<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lead', function (Blueprint $table) {
            $table->id('LeadID');
            $table->date('DateRecorded');
            $table->enum('ParcelEnquiry', ['Yes', 'No']);
            $table->foreignId('CustomerID')->constrained('Customer', 'CustomerID');
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
        Schema::dropIfExists('Lead');
    }
}
