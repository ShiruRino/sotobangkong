<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactSetting;

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
        // Bagikan variabel $contactSetting ke SEMUA file blade (*.blade.php)
        View::composer('*', function ($view) {
            $view->with('contactSetting', ContactSetting::first());
        });
    }
}