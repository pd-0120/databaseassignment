<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonStandardContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NonStandardContract', function (Blueprint $table) {
            $table->foreignId('ContractID')->constrained('Contract', 'ContractID')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->double('DiscountPercentage', 10,2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('NonStandardContract');
    }
}
