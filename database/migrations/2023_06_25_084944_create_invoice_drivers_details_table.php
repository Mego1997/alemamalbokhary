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
        Schema::create('invoice_drivers_details', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->double('price');
            $table->integer('quantity');
            $table->double('single_total');
            $table->string('name');
            $table->integer('invoice_id')->constrained('invoicedrivers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_drivers_details');
    }
};
