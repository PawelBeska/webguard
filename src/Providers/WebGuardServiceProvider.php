<?php

namespace WebGuard\Providers;
use Illuminate\Support\ServiceProvider;
use WebGuard\WebGuard;

class WebGuardServiceProvider extends ServiceProvider
{
    
    /**
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/webguard.php', 'webguard');
        $this->app->singleton('WebGuard', WebGuard::class);
    }


    /**
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../../config/webguard.php' => config_path('webguard.php'),
            ], 'config');

        }
    }
}
