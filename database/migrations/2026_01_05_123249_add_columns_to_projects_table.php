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
        Schema::table('projects', function (Blueprint $table) {
            $table->string('title')->after('id');
            $table->string('slug')->unique()->index()->after('title');
            $table->text('description')->after('slug');
            $table->text('long_description')->nullable()->after('description');
            $table->string('category')->index()->after('long_description');
            $table->string('image')->after('category');
            $table->string('color')->after('image');
            $table->json('tags')->nullable()->after('color');
            $table->json('technologies')->nullable()->after('tags');
            $table->json('features')->nullable()->after('technologies');
            $table->json('images')->nullable()->after('features');
            $table->string('client')->nullable()->after('images');
            $table->string('duration')->nullable()->after('client');
            $table->string('team_size')->nullable()->after('duration');
            $table->boolean('is_published')->default(true)->after('team_size');
            $table->timestamp('published_at')->nullable()->after('is_published');
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'slug',
                'description',
                'long_description',
                'category',
                'image',
                'color',
                'tags',
                'technologies',
                'features',
                'images',
                'client',
                'duration',
                'team_size',
                'is_published',
                'published_at',
                'deleted_at',
            ]);
        });
    }
};
