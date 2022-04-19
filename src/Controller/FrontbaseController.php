<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontbaseController extends AbstractController
{
    /**
     * @Route("/frontbase", name="app_frontbase")
     */
    public function index(): Response
    {
        return $this->render('frontbase.html.twig', [
            'controller_name' => 'FrontbaseController',
        ]);
    }
}
