<?php declare(strict_types=1);

namespace Tests;

use App\Controller\HealthCheckController;
use App\Service\GoogleService;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class HealthCheckTest extends WebTestCase {

    /**
     * @test
     * @group smoke
     */
    public function healthCheck_healthy()
    {
        $googleService = self::prophesize(GoogleService::class);
        $googleService->ping()->willReturn(new Response('available', Response::HTTP_OK));

        $sut = new HealthCheckController($googleService->reveal());
        self::assertEquals(new Response('available'), $sut->availability());
    }

    /**
     * @test
     * @group smoke
     */
    public function healthCheck_unhealthy()
    {
        $googleService = self::prophesize(GoogleService::class);
        $googleService->ping()->willReturn(new Response('unavailable', Response::HTTP_BAD_GATEWAY));

        $sut = new HealthCheckController($googleService->reveal());
        self::assertEquals(new Response('unavailable', Response::HTTP_BAD_GATEWAY), $sut->availability());
    }
}
