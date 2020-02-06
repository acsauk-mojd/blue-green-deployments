<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!!',
            'path' => 'src/Controller/AnimalController.php',
        ]);
    }

    /**
     * @Route("/jungle", name="animal")
     */
    public function jungle()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!!',
            'path' => 'src/Controller/AnimalController.php',
        ]);
    }
}
