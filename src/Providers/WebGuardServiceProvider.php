<?php

namespace WebGuard\Providers;
use Illuminate\Support\ServiceProvider;
use WebGuard\WebGuard;

class WebGuardServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/webguard.php', 'webguard');
        $this->app->singleton('WebGuard', WebGuard::class);
    }


    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../../config/webguard.php' => config_path('webguard.php'),
            ], 'config');

        }
    }
}
