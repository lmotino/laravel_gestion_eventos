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
        Schema::create('payments', function (Blueprint $table) {
            $table->payment_id();
            $table->foreignId('user_id')
                    ->nullable()
                    ->constrained('users')
                    ->cascadeOnDelete();
            $table->foreignId('reservation_id')
                    ->nullable()
                    ->constrained('reservations')
                    ->cascadeOnDelete();
            $table->decimal('deposit',8,2);
            $table->decimal('pending_payment',8,2);
            $table->date('payment_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
