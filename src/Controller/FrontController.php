<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/f", name="app_front")
     */
    public function index(): Response
    {
        return $this->render('baseFront.html.twig');

    }



    /**
     * @Route("/frontterrain", name="frontterrain")
     */
    public function user(): Response
    {
        return $this->render('front/frontafficheterrain.html.twig');

    }
}
