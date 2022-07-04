<?php

namespace WebGuard\Services;

class CaptchaService extends ApiService
{
    /**
     * @param $token
     * @param $input
     * @return mixed|string
     */
    public function validate($token, $input): mixed
    {
        return $this->makeCall('POST', 'https://api.webguard.pl/v1/captcha/'.$this->publicKey.'/verify/'.$token, [
            'private_key' => $this->privateKey,
            'answer' => $input
        ]);
    }
}
