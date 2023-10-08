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
        Schema::create('invoice_sale_details', function (Blueprint $table) {
            $table->id();
            $table->string('class');
            $table->double('paid');
            $table->double('discount');
            $table->double('total');
            $table->integer('invoice_sale_id')->constrained('invoice_sales');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_sale_details');
    }
};
