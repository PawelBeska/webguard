<?php


namespace WebGuard\Facades;

use Illuminate\Support\Facades\Facade;
use WebGuard\Services\CaptchaService;

/**
 * @method static bool validate(string $token, string $input)
 */
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
