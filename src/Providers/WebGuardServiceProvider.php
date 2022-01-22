<?php

namespace WebGuard\Providers;
use Illuminate\Support\ServiceProvider;
use WebGuard\WebGuard;

class WebGuardServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('WebGuard', WebGuard::class);
    }
}
