<?php

namespace App\Controller;

use App\Entity\Foot;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="app_front")
     */
    public function index(): Response
    {
        return $this->render('baseFront.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
    /**
     * @Route("/afficherrr", name="match")
     */
    public function indexfront(): Response
    {
        $match=$this->getDoctrine()->getManager()->getRepository(Foot::class)->findAll();
        return $this->render('front/frontaffichematch.html.twig', [
            'b'=>$match
        ]);
    }

}
