<?php

namespace App\Services;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

class CallApiService
{
    public function __construct(
        private HttpClientInterface $client,
        private $apikey,
    ) {}

    public function fetchData()
    {
        $response = $this->client->request('GET', 'https://api.nasa.gov/insight_weather/?api_key=' . $this->apikey . '&feedtype=json&ver=1.0');

        return $response->toArray();
    }
}