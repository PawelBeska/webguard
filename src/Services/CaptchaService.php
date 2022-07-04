<?php

namespace WebGuard\Services;

class CaptchaService extends ApiService
{
    public function validate($token, $input)
    {
        return $this->makeCall('POST', 'https://webguard.pl/');
    }
}
