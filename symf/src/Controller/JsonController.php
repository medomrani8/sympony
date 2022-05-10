<?php

namespace App\Controller;


use App\Entity\CategorieClub;
use App\Entity\Club;
use App\Entity\Stock;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;

class JsonController extends  AbstractController
{


    //STOCK API JSON FOR MOBILE

    /**
     * @Route("/json/addStock", name="addStock")
     */
    public function addStock(Request $request) {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");
        $Nom = $request->get("nom");
        $prix = $request->get("prix");
        $quantite = $request->get("quantite");
        $description = $request->get("description");


        // $category = $em->getRepository(Category::class)->find($category_id);
        $product = new Stock();
        $product->setNom($Nom);
        $product->setPrix($prix);
        $product->setDescription($description);
        $product->setQuantite($quantite);

        $product->setImage($request->get("image"));
        if($request->files->get("image") !=null) {
            $file = $request->files->get("image");
            $fileName = $file->getClientOriginalName();

            $filename = md5(uniqid()) . '.' .$file->guessExtension();//crypté image

            $file->move($this->getParameter('kernel.project_dir') . '/public/uploads/stock_image', $filename);


            $product->setImage($filename);



        }
        $em->persist($product);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($product);

        return new JsonResponse($formatted);





    }

    /**
     * @Route("/json/updateStock", name="updateStock")
     */
    public function updateStock(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $idprod = $request->get("idpro");
        $prod= $em->getRepository(Stock::class)->find($idprod);

        $Nom = $request->get("nom");
        $prix = $request->get("prix");
        $description = $request->get("description");
        $quantite = $request->get("quantite");



        // $category = $em->getRepository(Category::class)->find($category_id);


        $prod->setNom($Nom);
        $prod->setPrix($prix);
        $prod->setDescription($description);
        $prod->setQuantite($quantite);

        $prod->setImage($request->get("image"));
        if($request->files->get("image") !=null) {
            $file = $request->files->get("image");
            $fileName = $file->getClientOriginalName();

            $filename = md5(uniqid()) . '.' .$file->guessExtension();//crypté image

            $file->move($this->getParameter('kernel.project_dir') . '/public/uploads/stock_image', $filename);


            $prod->setImage($filename);



        }
        $em->persist($prod);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getId();
        });

        //  $serializer = new Serializer([$normalizer],[$encoder]);
        //$formatted = $serializer->normalize($prod);

        return new JsonResponse("Product update with success");





    }

    /**
     * @Route("/json/deleteStock", name="deleteStock")
     */
    public function deleteStock(Request $request) {
        $em= $this->getDoctrine()->getManager();
        $id = $request->get("idpro");


        $prod = $em->getRepository(Stock::class)->find($id);
        $em->remove($prod);
        $em->flush();
        return new JsonResponse("Stock deleted .");

    }

    /**
     * @Route("/json/afficheStock", name="afficheStock")
     */
    public function afficheStock() {
        $em= $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Stock::class)->findAll();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        //JOIN ERROR
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($object) {
            if(method_exists($object, 'getIdPro()')){
                return $object->getId();
            }
        });


        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($prod);


        return new JsonResponse($formatted);


    }






    /**
     * @Route("/json/addClub", name="addClub")
     */
    public function addClub(Request $request) {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");
        $categorie = $request->get("categorie");
        $validite = $request->get("validite");
        $numtel = $request->get("numtel");
        $adresse = $request->get("adresse");


        // $category = $em->getRepository(Category::class)->find($category_id);
        $club = new Club();
       $club->setCategorie($categorie);
       $club->setAdresse($adresse);
       $club->setNumtel($numtel);
       $club->setValidite($validite);


        $em->persist($club);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getIdclub();
        });

        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($club);

        return new JsonResponse($formatted);





    }

    /**
     * @Route("/json/updateClub", name="updateClub")
     */
    public function updateClub(Request $request) {

        $em = $this->getDoctrine()->getManager();


        // $category_id = $request->get("category_id");
        $categorie = $request->get("categorie");
        $validite = $request->get("validite");
        $numtel = $request->get("numtel");
        $adresse = $request->get("adresse");
        $idclub = $request->get("idclub");
        $club= $em->getRepository(Club::class)->find($idclub);

        // $category = $em->getRepository(Category::class)->find($category_id);
        $club->setCategorie($categorie);
        $club->setAdresse($adresse);
        $club->setNumtel($numtel);
        $club->setValidite($validite);


        $em->persist($club);
        $em->flush();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();
        $normalizer->setCircularReferenceHandler(function ($object) {
            return $object->getIdclub();
        });

        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($club);

        return new JsonResponse($formatted);





    }

    /**
     * @Route("/json/deleteClub", name="deleteClub")
     */
    public function deleteClub(Request  $request) {
        $em= $this->getDoctrine()->getManager();
        $id = $request->get("idclub");
        $cat = $em->getRepository(CategorieClub::class)->findOneBy(['idclub'=>$id]);

        $prod = $em->getRepository(Club::class)->find($id);
        $em->remove($cat);

        $em->remove($prod);
        $em->flush();
        return new JsonResponse("Club deleted .");

    }

    /**
     * @Route("/json/afficheClub", name="afficheClub")
     */
    public function afficheClub() {
        $em= $this->getDoctrine()->getManager();
        $prod = $em->getRepository(Club::class)->findAll();

        //RESPONSE JSON FROM OUR SERVER
        $encoder = new JsonEncoder();
        $normalizer = new ObjectNormalizer();

        //JOIN ERROR
        $normalizer->setCircularReferenceLimit(1);
        $normalizer->setCircularReferenceHandler(function ($object) {
            if(method_exists($object, 'getIdClub')){
                return $object->getId();
            }
        });


        $serializer = new Serializer([$normalizer],[$encoder]);
        $formatted = $serializer->normalize($prod);


        return new JsonResponse($formatted);


    }




}