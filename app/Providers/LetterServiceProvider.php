<?php

namespace App\Providers;

use App\Models\Letter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LetterServiceProvider extends ServiceProvider
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
        View::composer('*', function ($view) {

            $letters = Letter::all();

            $view->with('letters', $letters);
        });
    }
}
