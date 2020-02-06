<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    /**
     * @Route("/animal", name="animal")
     */
    public function animal()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!!',
            'path' => 'src/Controller/AnimalController.php',
        ]);
    }

    /**
     * @Route("/jungle", name="jungle")
     */
    public function jungle()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!!',
            'path' => 'src/Controller/AnimalController.php',
        ]);
    }

    /**
     * @Route("/forest", name="forest")
     */
    public function forest()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!!',
            'path' => 'src/Controller/AnimalController.php',
        ]);
    }

    /**
     * @Route("/beach", name="beach")
     */
    public function beach()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AnimalController.php',
        ]);
    }
}
