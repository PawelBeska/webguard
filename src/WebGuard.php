<?php

namespace WebGuard;

use WebGuard\Services\CaptchaService;

class WebGuard
{
    private CaptchaService $captchaService;

    public function __construct($publicKey, $privateKey)
    {
        $this->captchaService = new CaptchaService(
            $publicKey,
            $privateKey,
        );
    }

    /**
     * @param string $token
     * @param string $input
     * @return bool
     */
    public function validate(string $token, string $input): bool
    {
        try {
            return $this->captchaService->validate($token, $input)->data;
        } catch (\Exception $e) {
            return false;
        }
    }
}
