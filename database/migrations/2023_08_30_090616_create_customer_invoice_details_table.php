<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customer_invoice_details', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->double('paid');
            $table->double('discount');
            $table->double('total');
            $table->integer('customer_invoice_id')->constrained('customer_invoices');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_invoice_details');
    }
};
