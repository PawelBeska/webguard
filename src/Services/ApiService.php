<?php

namespace WebGuard\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class ApiService
{
    protected Client $client;
    protected string $publicKey;
    protected string $privateKey;

    public function __construct(string $publicKey, string $privateKey)
    {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
        $this->client = new Client([
            'base_url' => 'https://api.webguard.pl/v1/',
            'timeout' => 2.0
        ]);
    }

    /**
     */
    protected function makeCall(string $method, string $url, array $headers = [], array $body = [])
    {
        try {
            return json_decode(
                $this->client->request($method, $url, [
                ], $body)->getBody());
        } catch (GuzzleException $e) {

            return $e;
        }
    }

}
