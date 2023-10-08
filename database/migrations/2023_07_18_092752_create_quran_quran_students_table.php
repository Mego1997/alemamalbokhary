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
        Schema::create('quran_quran_students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quran_student_id')->constrained('quran_students');
            $table->foreignId('quran_id')->constrained('qurans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_quran_students');
    }
};
