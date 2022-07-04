<?php

namespace WebGuard\Services;

class CaptchaService extends ApiService
{
    /**
     * @throws \JsonException
     */
    public function validate($token, $input)
    {
        return $this->makeCall('POST', 'https://api.webguard.pl/v1/captcha/'.$this->publicKey.'/verify/'.$token, [
            'private_key' => $this->privateKey,
            'answer' => $input
        ]);
    }
}
