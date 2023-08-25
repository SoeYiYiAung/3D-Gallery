<?php

namespace App\Providers;

use App\Models\Partner;
use App\Models\Quality;
use App\Models\Service;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $qualities=Quality::get();

        $services=Service::get();

        $partners=Partner::get();

        View::share([
            'qualities' => $qualities,
            'services' => $services,
            'partners' => $partners
        ]);
    }
}
