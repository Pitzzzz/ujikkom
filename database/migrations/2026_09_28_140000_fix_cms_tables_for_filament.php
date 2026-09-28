<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('slug')->unique()->after('title');
            $table->string('author')->default('Redaksi HM')->after('category');
            $table->string('read_time')->default('3 mnt')->after('author');
            $table->text('excerpt')->nullable()->after('read_time');
            $table->string('quote')->nullable()->after('content');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->string('image')->after('id');
            $table->string('title')->after('image');
            $table->string('category')->after('title');
            $table->unsignedInteger('price')->default(0)->after('category');
            $table->json('variants')->nullable()->after('price');
            $table->text('short_description')->nullable()->after('variants');
            $table->unsignedInteger('sort_order')->default(0)->after('short_description');
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->string('image')->after('id');
            $table->string('title')->after('image');
            $table->string('category')->after('title');
            $table->date('date')->nullable()->after('category');
            $table->text('short_description')->nullable()->after('date');
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['slug', 'author', 'read_time', 'excerpt', 'quote']);
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'image',
                'title',
                'category',
                'price',
                'variants',
                'short_description',
                'sort_order',
            ]);
        });

        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn(['image', 'title', 'category', 'date', 'short_description']);
        });
    }
};
