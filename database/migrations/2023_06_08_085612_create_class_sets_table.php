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
        Schema::create('class_sets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('employees');
            $table->foreignId('class_id')->constrained('classes');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('class_sets');
    }
};
