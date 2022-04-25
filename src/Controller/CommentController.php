<?php

namespace App\Controller;

use App\Entity\Commentaire;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\EvenementRepository;
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

    /**
     * @Route("statcomment", name="statcomment")
     */
    public function evenement_stat(CommentRepository $evenementRepository): Response
    {
        $nbrs[] = array();

        $e0= $evenementRepository->find_Nb_Rec_Par_Status("0");
        dump($e0);
        $nbrs[] = $e0[0][1];

        $e1 = $evenementRepository->find_Nb_Rec_Par_Status("1");
        dump($e1);
        $nbrs[] = $e1[0][1];


        $e2 = $evenementRepository->find_Nb_Rec_Par_Status("2");
        dump($e2);
        $nbrs[] = $e2[0][1];


        $e3 = $evenementRepository->find_Nb_Rec_Par_Status("3");
        dump($e3);
        $nbrs[] = $e3[0][1];

        $e4 = $evenementRepository->find_Nb_Rec_Par_Status("4");
        dump($e4);
        $nbrs[] = $e4[0][1];

        $e5 = $evenementRepository->find_Nb_Rec_Par_Status("5");
        dump($e5);
        $nbrs[] = $e5[0][1];

        /*
                $e3=$activiteRepository->find_Nb_Rec_Par_Status("Diffence");
                dump($e3);
                $nbrs[]=$e3[0][1];
        */

        dump($nbrs);
        reset($nbrs);
        dump(reset($nbrs));
        $key = key($nbrs);
        dump($key);
        dump($nbrs[$key]);

        unset($nbrs[$key]);

        $nbrss = array_values($nbrs);
        dump(json_encode($nbrss));

        return $this->render('commentaire/statecomment.html.twig', [
            'nbr' => json_encode($nbrss),
        ]);
    }


}
