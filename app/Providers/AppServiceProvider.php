<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        $this->app->singleton('siteSetting', function () {
            if (! Schema::hasTable('settings')) {
                return null;
            }

            return Setting::query()->latest('id')->first();
        });

        View::composer('*', function ($view) {
            $view->with('siteSetting', app('siteSetting'));
        });
    }
}
