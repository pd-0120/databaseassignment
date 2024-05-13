<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payment', function (Blueprint $table) {
            $table->id('Payment');
            $table->date('PaymentDate')->nullable();
            $table->double('AmountPayable')->default(0.00);
            $table->foreignId('CustomerID')->constrained('Customer', 'CustomerID')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreignId('InvoiceID')->constrained('Invoice', 'InvoiceID')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Payment');
    }
}
