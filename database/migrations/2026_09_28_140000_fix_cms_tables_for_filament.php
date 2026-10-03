<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            if (! Schema::hasColumn('articles', 'slug')) {
                $table->string('slug')->nullable()->after('title');
            }
            if (! Schema::hasColumn('articles', 'author')) {
                $table->string('author')->default('Redaksi HM')->after('category');
            }
            if (! Schema::hasColumn('articles', 'read_time')) {
                $table->string('read_time')->default('3 mnt')->after('author');
            }
            if (! Schema::hasColumn('articles', 'excerpt')) {
                $table->text('excerpt')->nullable()->after('read_time');
            }
            if (! Schema::hasColumn('articles', 'quote')) {
                $table->string('quote')->nullable()->after('content');
            }
        });

        Schema::table('products', function (Blueprint $table) {
            if (! Schema::hasColumn('products', 'sort_order')) {
                $table->unsignedInteger('sort_order')->default(0)->after('short_description');
            }
        });

        $articles = DB::table('articles')->select('id', 'title', 'slug')->orderBy('id')->get();
        $reservedSlugs = $articles
            ->filter(fn ($article): bool => trim((string) $article->slug) !== '')
            ->pluck('slug')
            ->flip()
            ->all();
        $usedSlugs = [];

        foreach ($articles as $article) {
            $existingSlug = trim((string) $article->slug);

            if ($existingSlug !== '' && ! isset($usedSlugs[$existingSlug])) {
                $usedSlugs[$existingSlug] = true;
                continue;
            }

            $baseSlug = $existingSlug !== ''
                ? $existingSlug
                : (Str::slug($article->title) ?: 'artikel-'.$article->id);
            $slug = $baseSlug;
            $suffix = 2;

            while (isset($reservedSlugs[$slug]) || isset($usedSlugs[$slug])) {
                $slug = $baseSlug.'-'.$suffix++;
            }

            $usedSlugs[$slug] = true;
            DB::table('articles')->where('id', $article->id)->update(['slug' => $slug]);
        }

        $hasUniqueSlugIndex = collect(Schema::getIndexes('articles'))->contains(
            fn (array $index): bool => ($index['unique'] ?? false) && ($index['columns'] ?? []) === ['slug'],
        );

        if (! $hasUniqueSlugIndex) {
            Schema::table('articles', fn (Blueprint $table) => $table->unique('slug'));
        }
    }

    public function down(): void
    {
        // This reconciliation can find columns that predate the migration history.
    }
};
