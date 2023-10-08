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
        Schema::create('invoice_shop_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('total');
            $table->double('price');
            $table->double('quantity');
            $table->integer('invoice_id')->constrained('invoice_shops');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_shop_details');
    }
};
