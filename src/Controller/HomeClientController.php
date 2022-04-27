<?php

namespace App\Controller;

use App\Entity\CategorieClub;
use App\Entity\CategorieStock;
use App\Entity\Club;
use App\Entity\Foot;
use App\Entity\Stock;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeClientController extends AbstractController
{
    /**
     * @Route("/", name="home_client")
     */
    public function index(): Response
    {

        $foot=$this->getDoctrine()->getManager()->getRepository(Foot::class)->findAll();
        return $this->render('client/home_client/home.html.twig', [
            'b'=>$foot,

        ]);


    }
}
