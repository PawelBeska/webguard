<?php

namespace WebGuard;

use WebGuard\Services\CaptchaService;

class WebGuard
{

    public function verifyCaptcha(string $token, string $input): bool
    {
        try {
            $captchaService = new CaptchaService(
                config('webguard.public_key'),
                config('webguard.private_key'),
            );

            return $captchaService->validate($token, $input)->data;
        } catch (\Exception $e) {
            return false;
        }
    }
}
