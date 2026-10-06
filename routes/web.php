<?php

use App\Http\Controllers\SuperAdmin\AdminController;
use App\Http\Controllers\SuperAdmin\AuthController;
use App\Http\Controllers\SuperAdmin\DashboardController;
use App\Http\Controllers\LocaleController;
use App\Support\Content;
use Illuminate\Support\Facades\Route;

Route::get('/language/{locale}', LocaleController::class)->name('locale.switch');

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

Route::prefix('superadmin')->name('superadmin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::middleware(['auth', 'superadmin'])->group(function () {
        Route::get('/', DashboardController::class)->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('admins', AdminController::class)->except(['show']);
    });
});
