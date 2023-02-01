<?php

namespace WebGuard\Services;

class CaptchaService extends ApiService
{
    /**
     * @param $token
     * @param $input
     *
     * @return mixed|string
     */
    public function validate($token, $input): mixed
    {
        return $this->makeCall(
            'POST',
            sprintf(
                '%s/v1/captcha/%s/verify/%s',
                config('webguard.service_url'),
                $this->publicKey,
                $token
            ),
            [
                'private_key' => $this->privateKey,
                'answer' => $input
            ]
        );
    }
}
