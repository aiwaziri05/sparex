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
        Schema::create('social_media_links', function (Blueprint $table) {
            $table->id();
            $table->string('platform'); // facebook, twitter, instagram, linkedin, etc.
            $table->string('url');
            $table->string('icon')->nullable(); // Custom icon path or use default
            $table->string('hover_color')->nullable(); // Hover color (e.g., blue-600, pink-600)
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_media_links');
    }
};
