<?php

namespace Webguard\Services;

class CaptchaService extends ApiService
{
    public function validate($token, $input): bool
    {
        return $this->makeCall('POST', 'https://webguard.pl/');
    }
}
