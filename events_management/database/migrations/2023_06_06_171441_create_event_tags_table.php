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
        Schema::create('event_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')
                    ->nullable()
                    ->constrained('events')
                    ->cascadeOnUpdate();
            $table->foreignId('tag_id')
                    ->nullable()
                    ->constrained('tags')
                    ->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_tags');
    }
};
