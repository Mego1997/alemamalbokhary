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
        Schema::create('clothes_invoice_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->constrained('clothes_invoices');
            $table->double('paid');
            $table->double('remaning');
            $table->text('note')->default(null);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->foreignId('requested_price_id')->constrained('clothes_inventories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes_invoice_histories');
    }
};
