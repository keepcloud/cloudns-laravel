<?php

namespace Keepcloud\ClouDNS;

use Illuminate\Support\ServiceProvider;

class ClouDNSServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('cloudns.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/cloudns.php', 'cloudns'
        );
        $this->app->singleton(ClouDNS::class, function ($app) {
            return new ClouDNS();
        });
    }
}
