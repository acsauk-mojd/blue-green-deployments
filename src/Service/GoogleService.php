<?php declare(strict_types=1);


namespace App\Service;


use App\Client\GoogleClient;
use Symfony\Component\HttpFoundation\Response;

class GoogleService
{
    /**
     * @var GoogleClient
     */
    private $googleClient;

    public function __construct(GoogleClient $googleClient)
    {
        $this->googleClient = $googleClient;
    }

    public function ping()
    {
        $response = $this->googleClient->searchPage();

        if ($response->getStatusCode() === Response::HTTP_OK) {
            return new Response('available');
        }

        return new Response('unavailable', Response::HTTP_BAD_GATEWAY);
    }
}
