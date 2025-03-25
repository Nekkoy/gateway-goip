<?php

namespace Nekkoy\GatewayGoip;

use Illuminate\Support\ServiceProvider;

/**
 *
 */
class GoipServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(\Nekkoy\GatewayGoip\Services\GatewayService::class, function ($app) {
            return new \Nekkoy\GatewayGoip\Services\GatewayService();
        });

        $this->app->singleton('gateway-goip', function ($app) {
            return new \Nekkoy\GatewayGoip\Services\GatewayGoipService();
        });
    }

    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/config.php' => config_path('gateway-goip.php')], 'config');
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'gateway-goip');
    }
}
