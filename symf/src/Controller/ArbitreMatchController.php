<?php

namespace App\Controller;

use  Knp\Bundle\PaginatorBundle\Pagination\SlidingPaginationInterface;
use App\Entity\ArbitreMatch;
use App\Form\ArbitreMatchType;
use App\Repository\ArbitreMatchRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Doctrine\ORM\EntityManagerInterface;

class ArbitreMatchController extends AbstractController
{
    /**
     * @Route("/afficherArb", name="display_arb")
     */
    public function index(PaginatorInterface  $paginator,Request $request): Response
    {
        $amir=$this->getDoctrine()->getManager()->getRepository(ArbitreMatch::class)->findAll();
        $arb=$paginator->paginate(
            $amir,
            $request->query->getInt('page',1),
            3




        ) ;






        return $this->render('arbitre_match/index.html.twig', [
            'b'=>$arb
        ]);
    }

    /**
     * @Route("/addArbitre", name="addArb")
     */
    public function addTerrain(Request $request): Response
    {
        $ArbitreMatch = new ArbitreMatch();
        $form=$this->createForm(ArbitreMatchType::class,$ArbitreMatch);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($ArbitreMatch);
            $em->flush();

            $this->addFlash(
                'info',
                'Added successfully!'
            );


         //   return $this->redirectToRoute('addArb',['id'=>$ArbitreMatch->getIdarb()]);

            return $this->redirectToRoute('display_arb');
        }
        return $this->render('arbitre_match/createdArb.html.twig',['t'=>$form->createView()]);

    }


    /**
     * @Route("/supprimer/{id}", name="supp_arb")
     */
    public function supprimer(ArbitreMatch $ArbitreMatch): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em-> remove($ArbitreMatch);
        $em->flush();
        $this->addFlash(
            'info',
            'Remove successfully!'
        );

        return $this->redirectToRoute('display_arb');
    }


    /**
     * @Route("/modifierArbitre/{id}", name="modifierArb")
     */
    public function modifierTerrain(Request $request,$id): Response
    {
        $ArbitreMatch = $this->getDoctrine()->getManager()->getRepository(ArbitreMatch::class)->find($id);
        $form=$this->createForm(ArbitreMatchType::class,$ArbitreMatch);
        $form->HandleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();

            $em->flush();

            $this->addFlash(
                'info',
                'Updated successfully!'
            );

           return $this->redirectToRoute('display_arb');
           // return $this->redirectToRoute('modifierArb',['id'=>$ArbitreMatch->getIdarb()]);
        }
        return $this->render('arbitre_match/createdArb.html.twig',['t'=>$form->createView()]);

    }



    /**
     * @Route("/listArb", name="listArb", methods={"GET"})
     */
    public function list(ArbitreMatchRepository $FootRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->set('tempDir', '.\www\DaryGym\public\uploads\images');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfoptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('arbitre_match/list.html.twig', [
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
     * @Route("/TrierspcASC", name="triespc",methods={"GET"})
     */

    public function trierSpecialite(Request $request, ArbitreMatchRepository $ArbitreMatchRepository): Response
    {

        $ArbitreMatchRepository = $this->getDoctrine()->getRepository(ArbitreMatch::class);
        $arb = $ArbitreMatchRepository->trieamirr();

        return $this->render('arbitre_match/index.html.twig', [
            'b' => $arb,
        ]);
    }


    /**
     * @Route("/search", name="recherchearb", methods={"GET"})
     */

    public function searchoffreajax(Request $request, ArbitreMatchRepository $FootRepository): Response
    {
        $FootRepository = $this->getDoctrine()->getRepository(ArbitreMatch::class);
        $requestString = $request->get('searchValue');
        $foot = $FootRepository->findmatchbytype($requestString);

        return $this->render('arbitre_match/index.html.twig', [
            "b" => $foot
        ]);
    }



}
