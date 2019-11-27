<?php declare(strict_types=1);


namespace App\Client;


use GuzzleHttp\Client;

class GoogleClient
{
    /**
     * @var Client
     */
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function searchPage()
    {
        return $this->client->get('https://www.google.com');
    }
}
