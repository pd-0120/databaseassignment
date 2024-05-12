<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contract', function (Blueprint $table) {
            $table->id('ContractID');
            $table->foreignId('CustomerID')->constrained('Customer', 'CustomerID');
            $table->foreignId('EmployeeID')->constrained('Employee', 'EmployeeID');
            $table->string('ContractType', 45);
            $table->string('ContractValue', 45);
            $table->date('StartDate')->nullable();
            $table->date('EndDate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contract');
    }
}
