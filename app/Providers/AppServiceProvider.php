<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->ensurePublicStorageLink();
    }

    protected function ensurePublicStorageLink(): void
    {
        $target = storage_path('app/public');
        $link = public_path('storage');

        if (! is_dir($target) || file_exists($link) || is_link($link)) {
            return;
        }

        try {
            if (function_exists('symlink')) {
                symlink($target, $link);
            }
        } catch (\Throwable $e) {
            // Ignore storage-link creation errors here; the app can still run,
            // but the user can run `php artisan storage:link` manually.
        }
    }
}
