<?php declare(strict_types=1);

namespace Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class AnimalControllerTest extends WebTestCase {

    /**
     * @test
     * @group smoke
     */
    public function checkAllAnimalEndpoints()
    {
        $client = static::createClient();

        $client->request('GET', '/animal');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/jungle');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/forest');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $client->request('GET', '/beach');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
