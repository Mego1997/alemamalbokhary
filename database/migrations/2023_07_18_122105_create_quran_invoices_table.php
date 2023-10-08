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
        Schema::create('quran_invoices', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->double('discount');
            $table->double('total');
            $table->text('note')->default(null);
            $table->foreignId('quran_student_id')->constrained('quran_students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_invoices');
    }
};
