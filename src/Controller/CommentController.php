<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="app_comment")
     */
    public function index(): Response
    {
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }

    /**
     * @Route("/addC", name="addC")
     * @param Request $request
     * @return Response
     */
    public function add(Request $request ): Response
    {   $em = $this->getDoctrine()->getManager();
        $commentaire= new Commentaire();
//        $form = $this->createForm(CommentType::class, $commentaire);
//        $form->handleRequest($request);
        if ($request->isMethod('POST')){
            $commentaire->setComment($request->get("comment"));
            $commentaire->setNom($request->get('nom'));
            $commentaire->setNote($request->get('note'));
            $commentaire->setDateCom(new \DateTime('now'));
            $em->persist($commentaire);
            $em->flush();
            $this->addFlash('success','comment ADED successfully');

            return $this->redirectToRoute('addC');

        }
        return $this->render('comment/addC.html.twig', [

        ]);

    }
}
