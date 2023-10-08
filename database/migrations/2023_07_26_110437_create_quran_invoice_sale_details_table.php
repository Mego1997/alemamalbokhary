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
        Schema::create('quran_invoice_sale_details', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->double('paid');
            $table->double('discount');
            $table->double('total');
            $table->integer('invoice_sale_id')->constrained('quran_invoice_sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_invoice_sale_details');
    }
};
