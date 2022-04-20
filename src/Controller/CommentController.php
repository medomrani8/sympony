<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentType;
use App\Repository\CommentRepository;
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
     * @Route("/addC {idEven}", name="addC")
     * @param Request $request
     * @return Response
     */
    public function add(Request $request, $idEven ): Response
    {
        $em = $this->getDoctrine()->getManager();
        $commentaire = new Commentaire();
//        $form = $this->createForm(CommentType::class, $commentaire);
//        $form->handleRequest($request);
        if ($request->isMethod('POST')) {
            $commentaire->setComment($request->get("comment"));
            $commentaire->setNom($request->get('nom'));
            $commentaire->setNote($request->get('note'));
            $commentaire->setDateCom(new \DateTime('now'));
            $commentaire->setIdEven($idEven);
            $em->persist($commentaire);
            $em->flush();
            $this->addFlash('success', 'comment ADED successfully');

            return $this->redirectToRoute('afficherEfront');

        }
        return $this->render('comment/addC.html.twig', [

        ]);
    }
        /**
         * param CommentRepository $repository
         * @return Response
         * @Route("afficherC", name="afficherC")
         */
        public function afficher(CommentRepository $repository)
    {
        // $repo=$this->getDoctrine()->getRepository(Evenement::class);
        $comment = $repository->findAll();
        return $this->render('comment/afficherC.html.twig',
            ['commentaire' => $comment]);

    }

    /**
         * @Route("/supp {id}", name="deleteC")
         */
        public function Delete($id, CommentRepository $repository)
    {

        $user = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        $this->addFlash('success','Commentaire Deleted successfully');
        return $this->redirectToRoute('afficherC');

    }


}
