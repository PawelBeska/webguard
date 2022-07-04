<?php


namespace WebGuard\Facades;

use Illuminate\Support\Facades\Facade;
use WebGuard\Services\CaptchaService;

class WebGuard extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'webguard';
    }

}
