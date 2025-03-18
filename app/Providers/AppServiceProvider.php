<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        View::composer(['*'],function ($view){
            $setting = include(base_path('resources/views/website/settings/data.php'));
            $serviceData = include(base_path('resources/views/website/service/data.php'));

            // Ensure serviceData is an array before using collect()
            $serviceData = is_array($serviceData) ? $serviceData : [];
            $view->with([
                'setting'=> $setting,
                'servs'=> collect($serviceData)->where('status',1),
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
