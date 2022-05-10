<?php

namespace App\Controller;

use App\Entity\CategorieStock;
use App\Entity\Stock;
use App\Form\StockType;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StockController extends AbstractController
{
    /**
     * @Route("/stock_list", name="stock_list")
     */
    public function index(): Response
    {

        $res = $this->getDoctrine()->getManager()->getRepository(Stock::class)->findAll();
        return $this->render('stock/index.html.twig', array('stocks' => $res));
    }


    /**
     * @Route("/add_stock", name="add")
     */
    public function addstock(\Symfony\Component\HttpFoundation\Request  $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        $stock = new Stock();
        $categories = $this->getDoctrine()->getManager()->getRepository(CategorieStock::class)->findAll();

        $form = $this->createForm(StockType::class, $stock);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //upload image
            $uploadFile = $form['image']->getData(); // valeur ta3 image (ely how name ta3ha)
            $filename = md5(uniqid()) . '.' . $uploadFile->guessExtension(); //crypté image

            $uploadFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/stock_image', $filename);


            $stock->setImage($filename);





            /*
             * Add stock
             */
            $em->persist($stock);
            /*
             * Commit
             */
            $em->flush();

            return  $this->redirectToRoute('stock_list');
        }

        return $this->render('stock/addstock.html.twig', array("f" => $form->createView(), "c" => $categories));
    }
    /**
     * @Route("/modifier_stock/{id}", name="modification")
     */
    public function modifierstock(\Symfony\Component\HttpFoundation\Request $request, $id)
    {
        $stock = $this->getDoctrine()->getManager()->getRepository(Stock::class)->find($id);

        $editForm = $this->createForm(StockType::class, $stock);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            /*
           *  it means that the user has been set a new picture
           *  else :
           *  we let the old picture
           */

            $newLogoFile = $stock->getImage();
            $fileName = md5(uniqid()) . '.' . $newLogoFile->guessExtension();

            $uploadFile = $editForm['image']->getData(); // valeur ta3 image (ely how name ta3ha)
            $filename = md5(uniqid()) . '.' . $uploadFile->guessExtension(); //crypté image

            $uploadFile->move($this->getParameter('kernel.project_dir') . '/public/uploads/stock_image', $filename);


            $stock->setImage($filename);


            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('stock_list');
        }
        return $this->render('stock/modifier_stock.html.twig', array("f" => $editForm->createView()));
    }

    /**
     * @Route("/supprimer_stock/{id}", name="suppression")
     */
    public function  supprimerstock($id)
    {
        $em = $this->getDoctrine()->getManager();
        $i = $em->getRepository(Stock::class)->find($id);

        $em->remove($i);
        $em->flush();

        return $this->redirectToRoute("stock_list");
    }
    /**
     * @Route("/detail_stock/{id}", name="detail_stock")
     */
    public function detailstock(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Stock::class)->find($id);


        return $this->render('stock/detail_stock.html.twig', array(
            'id' => $prod->getIdpro(),
            'name' => $prod->getNom(),
            'prix' => $prod->getPrix(),
            'description' => $prod->getDescription(),
            'quantite' => $prod->getQuantite(),
            'image' => $prod->getImage(),
            'nameCat' => $prod->getCategory()->getNom()
        ));
    }


    /**
     * @Route("/detailstockClient/{id}", name="detailstockClient")
     */
    public function detailstockClient(\Symfony\Component\HttpFoundation\Request $req, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Stock::class)->find($id);


        return $this->renderView('client/detail_stock.html.twig', array(
            'id' => $prod->getIdpro(),
            'nom' => $prod->getNom(),
            'prix' => $prod->getPrix(),
            'description' => $prod->getDescription(),
            'quantite' => $prod->getQuantite(),
            'image' => $prod->getImage(),
            'nameCat' => $prod->getCategory()->getNom()
        ));
    }












    //SEARCH

    /**
     * @Route("/ajax_search_stock/", name="ajax_search_stock")
     */
    public function chercherstock(\Symfony\Component\HttpFoundation\Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q'); // ooofkdokfdfdf
        $stocks =  $em->getRepository(Stock::class)->rechercheAvanceStock($requestString);
        if (!$stocks) {
            $result['stocks']['error'] = "stock non trouvé :( ";
        } else {
            $result['stocks'] = $this->getRealEntities($stocks);
        }
        return new Response(json_encode($result));
    }





    // LES  attributs
    public function getRealEntities($stocks)
    {
        foreach ($stocks as $stocks) {
            $realEntities[$stocks->getIdPro()] = [$stocks->getImage(), $stocks->getNom(), $stocks->getPrix()];
        }
        return $realEntities;
    }




    /**
     * @Route("/topfive", name="topfive")
     */

    public function  afficherTopfivestock()
    {
        $em = $this->getDoctrine()->getManager();
        $stockEvalues = $em->getRepository(stock::class)->getstocksEvaluees();

        $note = 0;
        //count
        $i = 0;

        //tableau
        $j = 0;

        foreach ($stockEvalues as $pe) {
            $note = $note + $pe["note"];
            $i++;


            $noteMoy = $note / $i;

            $noteMoy = round($noteMoy);

            $prod = $em->getRepository(stock::class)->findOneBy(array('id' => $pe['id']));

            $stockTop[$j] = $prod;

            $j++;
        }
        return $this->render('stock/top.html.twig', array('id' => $pe['id'], 'note' => $pe['note'], 'topfive' => $stockTop));
    }







    /**
     * @Route("/pdf/{id}", name="article_pdf", methods={"GET","POST"})
     */
    public function stockpdf($id)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('stock/pdf.html.twig', [
            'stock' => $this->getDoctrine()->getRepository(Stock::class)->find($id)
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





}
