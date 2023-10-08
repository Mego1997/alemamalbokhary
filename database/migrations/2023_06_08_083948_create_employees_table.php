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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('gender');
            $table->date('birthday');
            $table->date('join_date');
            $table->string('address');
            $table->string('phone');
            $table->string('degree');
            $table->double('salary');
            $table->foreignId('specialization_id')->constrained('employee_specializations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
