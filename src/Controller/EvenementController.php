<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\CategorieRepository;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenement", name="app_evenement")
     */
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }
    /**
     * param EvenementRepository $repository
     * @return Response
     * @Route("afficherE", name="afficherE")
     */
    public function afficher(EvenementRepository $repository)
    {
        // $repo=$this->getDoctrine()->getRepository(Evenement::class);
        $evenement = $repository->findAll();
        return $this->render('evenement/afficherE.html.twig',
            ['evenement' => $evenement]);

    }
    /**
     * @Route("/suppE {ideven}", name="deleteE")
     */
    public function Delete($ideven , EvenementRepository $repository)
    {

        $ideven = $repository->find($ideven);
        $em = $this->getDoctrine()->getManager();
        $em->remove($ideven);
        $em->flush();
        $this->addFlash('success','Evenement Deleted successfully');
        return $this->redirectToRoute('afficherE');

    }
    /**
     * @Route("addE",  methods={"GET", "POST"})
     */
    public function Add(\Symfony\Component\HttpFoundation\Request $request)
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            $this->addFlash('success','EVENEMENT ADED successfully');

            return $this->redirectToRoute('afficherE');

        }
        return $this->render('evenement/addE.html.twig', [
            'formc' => $form->createView()
        ]);

    }
    /**
     * @Route("updateE/{ideven}",  name="updateE")
     */
    function update(EvenementRepository $repository, $ideven ,\Symfony\Component\HttpFoundation\Request $request)
    {
        $evenement = $repository->find($ideven);
        $form = $this->createForm(EvenementType::class, $evenement);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','EVENEMENT UPDATED successfully');

            return $this->redirectToRoute('afficherE');

        }
        return $this->render('evenement/updateE.html.twig', [
            'formev' => $form->createView()
        ]);
    }
}
