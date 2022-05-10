<?php

namespace App\Controller;

use App\Entity\Foot;
use App\Form\FootType;
use App\Repository\FootRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Doctrine\ORM\EntityManagerInterface;


class FootController extends AbstractController
{
    /**
     * @Route("/afficherr", name="display_match")
     */
    public function index(): Response
    {
        $match=$this->getDoctrine()->getManager()->getRepository(Foot::class)->findAll();
        return $this->render('foot/index.html.twig', [
            'b'=>$match
        ]);
    }

    /**
     * @Route("/addMatch", name="addMatch")
     */
    public function addTerrain(Request $request): Response
    {
        $foot = new Foot();
        $form=$this->createForm(FootType::class,$foot);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($foot);
            $em->flush();
            return $this->redirectToRoute('display_match');
        }
        return $this->render('foot/createdMatch.html.twig',['t'=>$form->createView()]);

    }

    /**
     * @Route("/supprimer/{id}", name="supp_match")
     */
    public function supprimer(Foot $foot): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em-> remove($foot);
        $em->flush();
        return $this->redirectToRoute('display_match');
    }


    /**
     * @Route("/modifierMatch/{id}", name="modifierMatch")
     */
    public function modifierTerrain(Request $request,$id): Response
    {
        $foot = $this->getDoctrine()->getManager()->getRepository(Foot::class)->find($id);
        $form=$this->createForm(FootType::class,$foot);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();

            $em->flush();
            return $this->redirectToRoute('display_match');
        }
        return $this->render('foot/updateMatch.html.twig',['t'=>$form->createView()]);

    }









    /**
     * @Route("/listMatch", name="listMatch", methods={"GET"})
     */
    public function list(FootRepository $FootRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->set('tempDir', '.\www\DaryGym\public\uploads\images');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfoptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('foot/list.html.twig', [
            'b' => $FootRepository->findAll(),
        ]);
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }


 /**
  * @Route("/TrierdateASC/back", name="trie1",methods={"GET"})
  */

    public function trierdate1(Request $request, FootRepository $FootRepository): Response
    {

        $FootRepository = $this->getDoctrine()->getRepository(Foot::class);
        $foot = $FootRepository->trieramir();

        return $this->render('foot/index.html.twig', [
            'b' => $foot,
        ]);
    }


       /**
        * @Route("/TriertypeDESC/back", name="trie3",methods={"GET"})
        */

    public function Triertype(Request $request, FootRepository $FootRepository): Response
    {
        $FootRepository = $this->getDoctrine()->getRepository(Foot::class);
        $foot = $FootRepository->Triertype();

        return $this->render('foot/index.html.twig', [
            'b' => $foot,
        ]);
    }





    /**
     * @Route("/search/back", name="offreajax", methods={"GET"})
     */

    public function searchoffreajax(Request $request, FootRepository $FootRepository): Response
    {
        $FootRepository = $this->getDoctrine()->getRepository(Foot::class);
        $requestString = $request->get('searchValue');
        $foot = $FootRepository->findmatchbytype($requestString);

        return $this->render('foot/index.html.twig', [
            "b" => $foot
        ]);
    }

    public function getRealEntities($entities)
    {

        foreach ($entities as $entity) {
            $realEntities[$entity->getId()] = $entity->getTypematchh();
        }

        return $realEntities;

    }




    /**
     * @Route("/admin/calendar", name="calendar")
     */
    public function calendar(FootRepository $reservationRepository)
    {
        $rev = $this->getDoctrine()->getRepository(Foot::class)
            ->createQueryBuilder('r')
            ->orderBy('r.datematchh', 'DESC')
            ->getQuery()
            ->getResult();
        $rdvs=[] ;

        foreach($rev as $r){
            $rdvs[] = [
                'idmatchh' => $r->getIdmatchh(),
               // 'title'=>$r->getClientId()->getNom(),
                'typematchh'=>$r->getTypematchh(),
                'start' => $r->getDatematchh()->add(new \DateInterval('PT' . $r->getDatematchh()->format('H') . 'H'))->format('Y-m-d H:i:s'),

                //'service' => $r->getNbPersonne(),

            ];
        }

        $data = json_encode($rdvs);

        return $this->render('foot/calendrier.html.twig', compact('data'));
    }






    /**
     * @Route("/stats", name="stats")
     */
    public function statistiques(FootRepository $footRepo){
        // On va chercher toutes les menus
        $menus = $footRepo->findAll();

//Data Category
        $foot = $footRepo->createQueryBuilder('a')
            ->select('count(a.idmatchh)')
            ->Where('a.typematchh= :typematchh')
            ->setParameter('typematchh',"foot")
            ->getQuery()
            ->getSingleScalarResult();

        $hand = $footRepo->createQueryBuilder('a')
            ->select('count(a.idmatchh)')
            ->Where('a.typematchh= :typematchh')
            ->setParameter('typematchh',"hand")
            ->getQuery()
            ->getSingleScalarResult();
        $volley= $footRepo->createQueryBuilder('a')
            ->select('count(a.idmatchh)')
            ->Where('a.typematchh= :typematchh')
            ->setParameter('typematchh',"volley")
            ->getQuery()
            ->getSingleScalarResult();

       

        return $this->render('Stats/stats.html.twig', [
            'nfoot' => $foot,
            'nhand' => $hand,
            'nvol' => $volley,


        ]);
    }


}
