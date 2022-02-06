<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use ConsoleTVs\Charts\Registrar as Charts;

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
    public function boot(Charts $charts)
    {
        Schema::defaultStringLength(191);

        // Force SSL in production
        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }

        $charts->register([
            \App\Charts\WeightCharts::class,
            \App\Charts\MuscleCharts::class,
            \App\Charts\FatCharts::class,
            \App\Charts\WaistCharts::class,
            \App\Charts\ThighCharts::class,
            \App\Charts\HipsCharts::class,
            \App\Charts\BicepsCharts::class,
        ]);
    }
}
