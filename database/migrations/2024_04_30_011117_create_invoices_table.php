<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Invoice', function (Blueprint $table) {
            $table->id('InvoiceID');
            $table->date('InvoiceDate')->nullable();
            $table->double('InvoiceAmount', 10, 2)->default(0.00);
            $table->date('DueDate')->nullable();
            $table->double('DiscountAmount', 10,2)->default(0.00);
            $table->foreignId('CustomerID')->constrained('Customer', 'CustomerID');
            $table->foreignId('ParcelID')->constrained('Parcel', 'ParcelID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Invoice');
    }
}
