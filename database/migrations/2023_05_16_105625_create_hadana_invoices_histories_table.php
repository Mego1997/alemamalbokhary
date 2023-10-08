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
        Schema::create('hadana_invoices_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('hadana_invoices_id')->constrained('hadana_invoices');
            $table->double('requested');
            $table->double('discount');
            $table->double('paid');
            $table->double('remaning');
            $table->text('note')->default(null);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('payment_method_id')->constrained('payment_methods');
            $table->double('requested_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hadana_invoices_histories');
    }
};
