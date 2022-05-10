<?php

namespace App\Controller;

use App\Entity\CategorieClub;
use App\Entity\CategorieStock;
use App\Entity\Club;
use App\Entity\Stock;
use App\Form\CategorieClubType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieClubController extends AbstractController
{
    /**
     * @Route("/afficher", name="display_CategorieClub")
     */
    public function index(): Response
    {
        $categorieClubs=$this->getDoctrine()->getManager()->getRepository(categorieClub::class)->findAll();
        return $this->render('categorie_club/index.html.twig', [
            'b'=>$categorieClubs
        ]);
    }

    /**
     * @Route("addCategorieClub", name="addCategorie_club")
     */
    public function addCatClub(Request $request): Response
    {
    $CatClub=new CategorieClub();
        $form=$this->createForm(CategorieClubType::class,$CatClub);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em= $this->getDoctrine()->getManager();

            $em->persist($CatClub);
            $em->flush();
            return $this->redirectToRoute('display_CategorieClub');
        }
        return $this->render('categorie_club/createdCategorieClub.html.twig',['t'=>$form->createView()]);

    }

    /**
     * @Route("/supprimerr/{id}", name="suppp")
     */
    public function supprimer(CategorieClub $categorieClub): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em-> remove($categorieClub);
        $em->flush();
        return $this->redirectToRoute('display_CategorieClub');
    }

    /**
     * @Route("/modifierCategorieClub/{id}", name="modifierCategorieClub")
     */
    public function modifierClub(Request $request,$id): Response
    {
        $categorieclub = $this->getDoctrine()->getManager()->getRepository(CategorieClub::class)->find($id);
        $form=$this->createForm(CategorieClubType::class,$categorieclub);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('display_CategorieClub');
        }
        return $this->render('categorie_club/updateCategorieClub.html.twig',['t'=>$form->createView()]);

    }
    // SHOW PRODUCTS BY CATEGORY ID BECAUES JJOINTURE:

    /**
     * @Route("/show_clubs_cat/{id}", name="show_clubs_cat")
     */
    public function showClubs(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(Club::class)->find($id);




        $clubs = $em->getRepository(CategorieClub::class)->findBy(['idclub'=>$categorie]);//list des prod ta3 categorie ly clikit alih

        return $this->render('client/club/showClubByCat.html.twig', array('clubs'=>$clubs

        ));
    }

}
