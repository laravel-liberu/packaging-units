<?php

namespace LaravelEnso\PackagingUnits;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->load()->publish();
    }

    private function load()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        return $this;
    }

    private function publish()
    {
        $this->publishes([
            __DIR__.'/../database/factories' => database_path('factories'),
        ], ['packaging-unit-factory', 'enso-factories']);

        $this->publishes([
            __DIR__.'/../database/seeds' => database_path('seeds'),
        ], ['packaging-unit-seeder',  'enso-seeders']);
    }
}
