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
        Schema::create('quran_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('gender');
            $table->date('birthday');
            $table->date('join_date');
            $table->string('address');
            $table->string('quran');
            $table->double('count');
            $table->string('parent_phone');
            $table->boolean('prev_hadana');
            $table->boolean('withdrawal');
            $table->boolean('archive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quran_students');
    }
};
