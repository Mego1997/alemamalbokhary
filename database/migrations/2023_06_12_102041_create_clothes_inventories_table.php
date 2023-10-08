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
        Schema::create('clothes_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->default(null)->constrained('suppliers');
            $table->string('name');
            $table->double('quantity');
            $table->double('owner_price');
            $table->double('student_price');
            $table->double('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clothes_inventories');
    }
};
