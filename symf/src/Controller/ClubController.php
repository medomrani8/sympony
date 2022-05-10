<?php

namespace App\Controller;

use App\Entity\CategorieClub;
use App\Entity\Club;
use App\Form\ClubType;
use Mukadi\Chart\Builder;
use Mukadi\Chart\Chart;
use Mukadi\Chart\Utils\RandomColorFactory;
use Swift_Mailer;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ClubRepository;


class ClubController extends AbstractController
{

    /**
     * @Route("/afficher1", name="display_club")
     */

    public function index(): Response
    {
        $Clubs = $this->getDoctrine()->getManager()->getRepository(Club::class)->findAll();
        return $this->render('club/index.html.twig', [
            'b' => $Clubs
        ]);
    }

    /**
     * @Route("/addClub", name="adddd")
     */

    public function addClub(Request $request, Swift_Mailer $mailer): Response
    {
        $club = new Club();
        $form = $this->createForm(ClubType::class, $club);
        $form->HandleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();




            //SEND MAIL B UNDLE 





            $message = (new Swift_Message('Club'))
                ->setFrom('mohmedaziz.trabelsi@esprit.tn')
                ->setTo("mohmedaziz.trabelsi@esprit.tn")
                ->setBody(
                    "<p> Bonjour </p>,Nouveau Club a ete ajouté avec success</p>",
                    'text/html'
                );

            // On envoie l'e-mail
            $mailer->send($message);

            // On crée le message flash de confirmation
            $this->addFlash('message', 'E-mail sera envoyé !');

            // On redirige vers la page de


      //      return $this->redirectToRoute('display_club');
        }




        return $this->render('club/createdClub.html.twig', ['t' => $form->createView()]);
    }

    /**
     * @Route("/supprimer1/{id}", name="supp_club")
     */
    public function supprimer(Club $Club): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($Club);
        $em->flush();
        return $this->redirectToRoute('display_club');
    }

    /**
     * @Route("/modifierclub/{id}", name="modifierclub")
     */
    public function modifierTerrain(Request $request, $id): Response
    {
        $club = $this->getDoctrine()->getManager()->getRepository(Club::class)->find($id);
        $form = $this->createForm(ClubType::class, $club);
        $form->HandleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('display_club');
        }
        return $this->render('club/modifier.html.twig', ['t' => $form->createView()]);
    }





    /**
     * @Route("/afficherClientClub", name="afficherClientClub")
     */

    public function afficherClientClub(): Response
    {
        $Clubs = $this->getDoctrine()->getManager()->getRepository(Club::class)->findAll();
        return $this->render('client/club/index.html.twig', [
            'b' => $Clubs
        ]);
    }


    /**
     * @Route("/afficherClientClubCategorie", name="afficherClientClubCategorie")
     */

    public function afficherClientClubCategorie(): Response
    {
        $Clubs = $this->getDoctrine()->getManager()->getRepository(CategorieClub::class)->findAll();
        return $this->render('client/club/categorieclub.html.twig', [
            'b' => $Clubs
        ]);
    }








    //METIER TRIE

    /**
     * @Route("/TrierdateASC/back", name="trie1",methods={"GET"})
     */
    public function Trierdate(Request $request, ClubRepository $ClubRepository): Response
    {
        $ClubRepository = $this->getDoctrine()->getRepository(Club::class);
        $club = $ClubRepository->trierdate();

        return $this->render('club/index.html.twig', [
            'b' => $club,
        ]);
    }

    //METIER RECHERCHE AVANCEE

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $clubs =  $em->getRepository(Club::class)->findEntitiesByString($requestString);
        if (!$clubs) {
            $result['clubs']['error'] = "club Not found :( ";
        } else {
            $result['clubs'] = $this->getRealEntities($clubs);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities($club)
    {
        foreach ($club as $b) {
            $realEntities[$club->getIdclub()] = [$club->getAdresse(), $club->getCategorie()];
        }
        return $realEntities;
    }


    //METIER STATISTIQUE

    /**
     *
     * @Route("/chart", name="chary_index")
     */
    public function chart()
    {

        return $this->render("club/chart.html.twig");
    }

    /**
     *
     * @Route("/chary_index_ajax", name="chary_index_ajax")
     */
    public function chary_index_ajax()
    {

        $total = $this->getDoctrine()->getRepository(Club::class)->countClub();
        return new Response(json_encode($total));
    }
}
