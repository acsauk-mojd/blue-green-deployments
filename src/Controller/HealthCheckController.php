<?php declare(strict_types=1);


namespace App\Controller;


use App\Service\GoogleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealthCheckController extends AbstractController
{
    /**
     * @var GoogleService
     */
    private $googleService;

    /**
     * HealthCheckController constructor.
     * @param GoogleService $googleService
     */
    public function __construct(GoogleService $googleService)
    {
        $this->googleService = $googleService;
    }

    /**
     * @Route("/health-check", methods={"GET","HEAD"})
     */
    public function availability()
    {
        return $this->googleService->ping();
    }

    /**
     * @Route("/fake", methods={"GET","HEAD"})
     */
    public function fakeEndpoint()
    {
        if ((rand(1,2) === 2)) {
            return new Response();
        } else {
            return new Response('FORBIDDEN', Response::HTTP_FORBIDDEN);
        }
    }

    /**
     * @Route("/superFake", methods={"GET","HEAD"})
     */
    public function superFake()
    {
        if ((rand(1,2) === 2)) {
            return new Response();
        } else {
            return new Response('FORBIDDEN', Response::HTTP_FORBIDDEN);
        }
    }
}
