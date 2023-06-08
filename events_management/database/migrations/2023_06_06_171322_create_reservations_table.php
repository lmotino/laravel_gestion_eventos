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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('DNI',12);
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->date('reservation_date');
            $table->foreignId('user_id')
                    ->nullable()
                    ->constrained('users')
                    ->cascadeOnUpdate();
            $table->foreignId('event_id')
                    ->nullable()
                    ->constrained('events')
                    ->cascadeOnUpdate();
            $table->timestamps();
        });
    }
   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
