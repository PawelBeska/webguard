<?php

namespace WebGuard;

use WebGuard\Services\CaptchaService;

class WebGuard
{

    private string $publicKey;
    private string $privateKey;

    public function __construct(string $publicKey, string $privateKey)
    {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
    }

    public function verifyCaptcha(string $token, string $input): bool
    {
        try {
            $captchaService = new CaptchaService(
                $this->publicKey,
                $this->privateKey
            );

            return $captchaService->validate($token, $input)['data'];
        } catch (\Exception $e) {
            return false;
        }
    }
}
