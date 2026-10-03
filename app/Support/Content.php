<?php

namespace App\Support;

use App\Models\Article;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

class Content
{
    public static function gallery(): array
    {
        return Gallery::query()
            ->latest('date')
            ->get()
            ->map(fn (Gallery $gallery): array => [
                'src' => self::imageUrl($gallery->image),
                'title' => $gallery->title,
                'desc' => $gallery->short_description ?? '',
                'date' => Carbon::parse($gallery->date)->format('d M Y'),
                'cat' => $gallery->category,
            ])
            ->all();
    }

    public static function articles(): array
    {
        return Article::query()
            ->latest('date')
            ->get()
            ->map(fn (Article $article): array => self::mapArticle($article))
            ->all();
    }

    public static function article(string $slug): ?array
    {
        $article = Article::query()->where('slug', $slug)->first();

        return $article ? self::mapArticle($article) : null;
    }

    public static function products(): array
    {
        return Product::query()
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get()
            ->values()
            ->map(fn (Product $product, int $index): array => [
                'img' => self::imageUrl($product->image),
                'cat' => $product->category,
                'title' => $product->title,
                'desc' => $product->short_description ?? '',
                'price' => 'Rp '.number_format((float) $product->price, 0, ',', '.'),
                'priceValue' => (float) $product->price,
                'no' => str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT),
                'variants' => $product->variants ?? [],
            ])
            ->all();
    }

    private static function mapArticle(Article $article): array
    {
        $date = $article->getRawOriginal('date');
        $content = str_replace(
            ['</p>', '<br>', '<br/>', '<br />'],
            ["\n", "\n", "\n", "\n"],
            $article->content ?? '',
        );

        return [
            'slug' => $article->slug,
            'img' => self::imageUrl($article->image),
            'cat' => $article->category,
            'title' => $article->title,
            'excerpt' => $article->excerpt,
            'date' => $date ? Carbon::parse($date)->format('d M Y') : '',
            'author' => $article->author,
            'read' => $article->read_time,
            'body' => preg_split('/\R+/', trim(strip_tags($content)), -1, PREG_SPLIT_NO_EMPTY) ?: [],
            'quote' => $article->quote,
        ];
    }

    private static function imageUrl(string $path): string
    {
        /** @var FilesystemAdapter $disk */
        $disk = Storage::disk('public');

        return $disk->url($path);
    }
}
