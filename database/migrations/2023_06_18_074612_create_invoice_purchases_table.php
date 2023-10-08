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
        Schema::create('invoice_purchases', function (Blueprint $table) {
            $table->id();
            $table->double('paid');
            $table->double('remaning');
            $table->double('total');
            $table->text('note')->default(null);
            $table->foreignId('type_id')->constrained('supplier_types');
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_purchases');
    }
};
