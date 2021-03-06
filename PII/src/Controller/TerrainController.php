<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\TerrainType;
use App\Entity\Terrain;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TerrainRepository;
use App\Form\SearchDataType;
use Dompdf\Dompdf;
use Dompdf\Options;



class TerrainController extends AbstractController
{

    /**
     * @Route("/addTerrain", name="addTerrain")
     */
    public function addTerrain(Request $request): Response
    {
        $terrain = new Terrain();
        $form = $this->createForm(TerrainType::class, $terrain);
        $form->HandleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($terrain);
            $em->flush();
            $this->addFlash('info', 'Terrain ajouté avec succées !');
            return $this->redirectToRoute('display_terrain');
        }
        return $this->render('terrain/createdTerrain.html.twig', ['t' => $form->createView()]);

    }

    /**
     * @Route("/supprimer/{id}", name="supp_terrain")
     */
    public function supprimer(Terrain $terrain): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($terrain);
        $em->flush();
        $this->addFlash('info', 'Terrain supprimé avec succées !');
        return $this->redirectToRoute('display_terrain');
    }

    /**
     * @Route("/modifierTerrain/{id}", name="modifierTerrain")
     */
    public function modifierTerrain(Request $request, $id): Response
    {
        $terrain = $this->getDoctrine()->getManager()->getRepository(Terrain::class)->find($id);
        $form = $this->createForm(TerrainType::class, $terrain);
        $form->HandleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->flush();
            $this->addFlash('info', 'Terrain modifié avec succées !');
            return $this->redirectToRoute('display_terrain');
        }
        return $this->render('terrain/updateTerrain.html.twig', ['t' => $form->createView()]);

    }

    /**
     * @Route("/affichert", name="display_terrain")
     */
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $terrains = $this->getDoctrine()->getManager()->getRepository(Terrain::class)->findAll();
        $terrains = $paginator->paginate($terrains, $request->query->getInt('page', 1), 4);
        return $this->render('terrain/index.html.twig', [
            'b' => $terrains
        ]);

    }

    /**
     * @Route("/aa", name="aaa",methods={"GET"})
     */
    public function rechercheaa(TerrainRepository $terrainRepository, Request $request): Response

    {
        $data = new SearchData();
        $form = $this->createForm(SearchDataType::class, $data);
        $form->handleRequest($request);
        $Terrain = $terrainRepository->findSearch($data);
        return $this->render('terrain/index.html.twig', [
            'b' => $Terrain, 'form_search' => $form->createView(),
        ]);
    }


    /**
     * @Route("/listTerrainn", name="listTerrain", methods={"GET"})
     */
    public function list(TerrainRepository $terrainRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfoptions = new Options();
        $pdfoptions->set('defaultFont', 'Arial');
        $pdfoptions->set('tempDir', '.\www\DaryGym\public\uploads\images');


        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfoptions);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('terrain/list.html.twig', [
            'b' => $terrainRepository->findAll(),
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
     * @Route("/stats", name="stats")
     */
    public function statistiques(TerrainRepository $terrainRepository)
    {
        // On va chercher toutes les menus
        $menus = $terrainRepository->findAll();

//Data Category
        $tennis = $terrainRepository->createQueryBuilder('a')
            ->select('count(a.idterrain)')
            ->Where('a.typeterrain= :typeTerrain')
            ->setParameter('typeTerrain', "tennis")
            ->getQuery()
            ->getSingleScalarResult();

        $handball = $terrainRepository->createQueryBuilder('a')
            ->select('count(a.idterrain)')
            ->Where('a.typeterrain= :typeTerrain')
            ->setParameter('typeTerrain', "handball")
            ->getQuery()
            ->getSingleScalarResult();
        $football = $terrainRepository->createQueryBuilder('a')
            ->select('count(a.idterrain)')
            ->Where('a.typeterrain= :typeTerrain')
            ->setParameter('typeTerrain', "football")
            ->getQuery()
            ->getSingleScalarResult();


        return $this->render('Stats/stats.html.twig', [
            'ntennis' => $tennis,
            'nhandball' => $handball,
            'nfootball' => $football,
        ]);
    }





//
///**
// * @Route("/triertype", name="trier",methods={"GET"})
// */
//
//public function triertype(Request $request, TerrainRepository $terrainRepository): Response
//{
//
//    $terrainRepository = $this->getDoctrine()->getRepository(Terrain::class);
//    $terrain = $terrainRepository->trierwalid();
//
//    return $this->render('terrain/index.html.twig', [
//        'b' => $terrain,
//    ]);
//}
//
}


///**
// * @Route("/search", name="search")
// */
//public function searchAction(Request $request,TerrainRepository $terrainRepository){
//    $em=$this->getDoctrine()->getManager();
//    $requestString = $request->get('q');
//    $posts = $terrainRepository->findEntitiesByString($requestString);
//    // $posts=$em->getRepository('Terrain')->findEntitiesByString($requestString);
//
//    if(!$posts){
//        $result['posts']['error']="terrain not found :{";
//
//    }
//    else {
//        $result['posts'] = $this->getRealEntities($posts);
//    }
//    return new Response(json_encode($result));
//}
//public function getRealEntities($posts){
//    foreach ($posts as $posts){
//        $realEntities[$posts->getIdTerrain()]= [$posts->getTypeTerrain()];
//    }
//    return $realEntities;
//}