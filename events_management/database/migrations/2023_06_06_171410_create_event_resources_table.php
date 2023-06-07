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
        Schema::create('event_resources', function (Blueprint $table) {
            $table->event_resource_id();
            $table->foreignId('event_id')
                    ->nullable()
                    ->constrained('events')
                    ->cascadeOnUpdate();
            $table->foreignId('resource_id')
                    ->nullable()
                    ->constrained('resources');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_resources');
    }
};
