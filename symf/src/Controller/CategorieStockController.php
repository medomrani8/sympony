<?php

namespace App\Controller;

use App\Entity\CategorieStock;
use App\Entity\Stock;
use App\Form\CategorieStockType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieStockController extends AbstractController
{
    /**
     * @Route("/afficher2", name="display_CategorieStock")
     */
    public function index(): Response
    {
        $categorieStock=$this->getDoctrine()->getManager()->getRepository(categorieStock::class)->findAll();
        return $this->render('categorie_stock/index.html.twig', [
            'b'=>$categorieStock
        ]);
    }

    /**
     * @Route("/addCategorieStock", name="app_categorie_stock")
     */
    public function addCategorieStock(Request $request): Response
    {
        $CatStock=new CategorieStock();
        $form=$this->createForm(CategorieStockType::class, $CatStock);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $em= $this->getDoctrine()->getManager();

            $em->persist($CatStock);
            $em->flush();
            return $this->redirectToRoute('display_CategorieStock');
        }
        return $this->render('categorie_stock/createdCategorieStock.html.twig',['t'=>$form->createView()]);

    }

    /**
     * @Route("/supprimer2/{id}", name="supp_categoriestock")
     */
    public function supprimer(CategorieStock $categorieStock): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em-> remove($categorieStock);
        $em->flush();
        return $this->redirectToRoute('display_CategorieStock');
    }


    /**
     * @Route("/modifierCategorieStock/{id}", name="modifierCategorieStock")
     */
    public function modifierStock(Request $request,$id): Response
    {
        $categoriestock = $this->getDoctrine()->getManager()->getRepository(CategorieStock::class)->find($id);
        $form=$this->createForm(CategorieStockType::class,$categoriestock);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('display_CategorieStock');
        }
        return $this->render('categorie_stock/modifierCategorieStock.html.twig',['t'=>$form->createView()]);

    }

    // SHOW PRODUCTS BY CATEGORY ID BECAUES JJOINTURE:

    /**
     * @Route("/show_products_cat/{id}", name="show_products")
     */
    public function showProducts(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $categorie = $em->getRepository(CategorieStock::class)->find($id);

        //     var_dump($categorie);die();



        $product = $em->getRepository(Stock::class)->findBy(['category'=>$categorie]);//list des prod ta3 categorie ly clikit alih


        return $this->render('client/stock/showProductsByCat.html.twig', array('products'=>$product

        ));
    }

}
