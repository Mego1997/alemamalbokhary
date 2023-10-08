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
        Schema::create('book_invoices', function (Blueprint $table) {
            $table->id();
            $table->double('paid');
            $table->double('remaning');
            $table->text('note')->default(null);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->foreignId('requested_price_id')->constrained('book_inventories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_invoices');
    }
};
