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
        Schema::create('quran_invoice_sales', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->double('paid');
            $table->double('discount');
            $table->double('total');
            $table->text('note');
            $table->foreignId('student_id')->constrained('quran_students');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_invoice_sales');
    }
};
