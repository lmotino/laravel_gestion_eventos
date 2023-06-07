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
        Schema::create('events', function (Blueprint $table) {
            $table->event_id();
            $table->string('title');
            $table->text('description');
            $table->date('date');
            $table->foreignId('location_id')
                    ->nullable()
                    ->constrained('locations')
                    ->cascadeOnUpdate();
            $table->foreignId('category_id')
                    ->nullable()
                    ->constrained('categories')
                    ->cascadeOnUpdate();
            $table->timestamps();
        });
    }   

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};