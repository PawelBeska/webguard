<?php

namespace WebGuard\Tests;

use WebGuard\Providers\WebGuardServiceProvider;

class CaptchaTest extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        // additional setup
    }

    protected function getPackageProviders($app)
    {
        return [
            WebGuardServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }
}