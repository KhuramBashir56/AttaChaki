<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        //    Set auto url generation to include the current locale in all generated URLs
        URL::defaults(['locale' => request()->route('locale') ?? app()->getLocale()]);
    }
}
