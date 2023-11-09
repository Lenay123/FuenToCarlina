<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{

    public function boots(UrlGenerator $url)
    {
        if (env('APP_ENV') == 'production') {
            $url->forceScheme('https');
        }
    }
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
    public function boot()
    {
        // Paginator::useBootstrap();
        Paginator::useBootstrapFive();
        Validator::extend('not_weekend', function ($attribute, $value, $parameters, $validator) {
            $dayOfWeek = date('N', strtotime($value)); // Get the day of the week (1 = Monday, 7 = Sunday)
            return $dayOfWeek < 6; // Allow dates from Monday to Friday (not weekend)
        });
        
    }

}
