<?php

namespace App\Controller;

use App\Entity\CategorieClub;
use App\Entity\CategorieStock;
use App\Entity\Club;
use App\Entity\Stock;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeClientController extends AbstractController
{
    /**
     * @Route("/homeclient", name="home_client")
     */
    public function index(Request  $request, PaginatorInterface $paginator): Response
    {

        $Clubs=$this->getDoctrine()->getManager()->getRepository(Club::class)->findAll();
        $categorie=$this->getDoctrine()->getManager()->getRepository(CategorieStock::class)->findAll();


        //PAGINATION BUNDLE
        $Clubs = $paginator->paginate(
        // Doctrine Query, not results
            $Clubs,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );
        //PAGINATION BUNDLE


        $categorie = $paginator->paginate(
        // Doctrine Query, not results
            $categorie,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            1
        );


        return $this->render('client/home_client/home.html.twig', [
            'b'=>$Clubs,'c'=>
                $categorie
        ]);


    }
}
