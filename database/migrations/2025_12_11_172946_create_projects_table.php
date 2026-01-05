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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique()->index();
            $table->text('description');
            $table->text('long_description')->nullable();
            $table->string('category')->index();
            $table->string('image');
            $table->string('color');
            $table->json('tags')->nullable();
            $table->json('technologies')->nullable();
            $table->json('features')->nullable();
            $table->json('images')->nullable();
            $table->string('client')->nullable();
            $table->string('duration')->nullable();
            $table->string('team_size')->nullable();
            $table->boolean('is_published')->default(true);
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
