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
        Schema::create('bus_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->double('price');
            $table->double('discount');
            $table->double('total');
            $table->text('note')->default(null);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('location_id')->constrained('locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_subscriptions');
    }
};
