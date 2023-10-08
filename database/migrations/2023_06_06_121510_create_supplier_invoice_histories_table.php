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
        Schema::create('supplier_invoice_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->constrained('supplier_invoices');
            $table->string('name');
            $table->double('paid');
            $table->double('remaning');
            $table->double('total');
            $table->double('owner_price');
            $table->double('student_price');
            $table->double('quantity');
            $table->text('note')->default(null);
            $table->foreignId('supplier_id')->constrained('suppliers');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_invoice_histories');
    }
};
