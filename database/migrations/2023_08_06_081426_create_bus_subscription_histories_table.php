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
        Schema::create('bus_subscription_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('bus_subscription_id')->constrained('bus_subscriptions');
            $table->double('price');
            $table->double('discount');
            $table->double('total');
            $table->double('paid');
            $table->double('remaning');
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
        Schema::dropIfExists('bus_subscription_histories');
    }
};
