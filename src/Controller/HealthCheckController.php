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
}
