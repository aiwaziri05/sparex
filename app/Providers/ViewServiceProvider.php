<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share social media links globally for footer
        view()->composer('components.footer', function ($view) {
            $socialMediaLinks = \App\Models\SocialMediaLink::active()->ordered()->get();
            $view->with('socialMediaLinks', $socialMediaLinks);
        });
    }
}
