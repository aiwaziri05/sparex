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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('slug')->unique()->index()->after('id');
            $table->string('title')->after('slug');
            $table->text('description')->after('title');
            $table->text('content')->after('description');
            $table->string('image')->after('content');
            $table->string('category')->index()->after('image');
            $table->string('color')->after('category');
            $table->string('read_time')->after('color');
            $table->string('author')->after('read_time');
            $table->json('tags')->nullable()->after('author');
            $table->boolean('is_published')->default(true)->after('tags');
            $table->timestamp('published_at')->nullable()->after('is_published');
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn([
                'slug',
                'title',
                'description',
                'content',
                'image',
                'category',
                'color',
                'read_time',
                'author',
                'tags',
                'is_published',
                'published_at',
                'deleted_at',
            ]);
        });
    }
};
