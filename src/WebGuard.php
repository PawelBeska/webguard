<?php

namespace WebGuard;

use WebGuard\Services\CaptchaService;

class WebGuard
{
    /**
     * @var \WebGuard\Services\CaptchaService
     */
    private CaptchaService $captchaService;

    /**
     * @param $publicKey
     * @param $privateKey
     */
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
