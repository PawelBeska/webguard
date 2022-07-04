<?php

namespace WebGuard\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class ApiService
{
    /**
     * @var \GuzzleHttp\Client
     */
    protected Client $client;

    /**
     * @var string
     */
    protected string $publicKey;

    /**
     * @var string
     */
    protected string $privateKey;

    /**
     * @param string $publicKey
     * @param string $privateKey
     */
    public function __construct(string $publicKey, string $privateKey)
    {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
        $this->client = new Client([
            'timeout' => 2.0
        ]);
    }


    /**
     * @param string $method
     * @param string $url
     * @param array $body
     * @param array $headers
     * @return mixed|string
     */
    protected function makeCall(string $method, string $url, array $body = [], array $headers = []): mixed
    {
        try {
            return json_decode($this->client->request($method, $url, [
                RequestOptions::JSON => $body,
            ])->getBody(), false, 512, JSON_THROW_ON_ERROR);
        } catch (GuzzleException $e) {
            return $e->getMessage();
        } catch (\JsonException $e) {
            return $e->getMessage();
        }
    }

}
