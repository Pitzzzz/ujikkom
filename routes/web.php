<?php

use App\Support\Content;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'gallery' => array_slice(Content::gallery(), 0, 6),
        'articles' => array_slice(Content::articles(), 0, 3),
        'products' => array_slice(Content::products(), 0, 3),
    ]);
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/galeri', function () {
    return view('galeri', ['gallery' => Content::gallery()]);
})->name('galeri');

Route::get('/artikel', function () {
    return view('artikel', ['articles' => Content::articles()]);
})->name('artikel');

Route::get('/artikel/{slug}', function (string $slug) {
    $article = Content::article($slug);
    abort_unless($article, 404);

    $all = Content::articles();
    $index = collect($all)->search(fn ($item) => $item['slug'] === $slug);
    $prev = $index > 0 ? $all[$index - 1] : null;
    $next = $index < count($all) - 1 ? $all[$index + 1] : null;
    $related = collect($all)
        ->reject(fn ($item) => $item['slug'] === $slug)
        ->take(3)
        ->values()
        ->all();

    return view('artikel-show', compact('article', 'prev', 'next', 'related'));
})->name('artikel.show');

Route::get('/produk', function () {
    return view('produk', ['products' => Content::products()]);
})->name('produk');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');
