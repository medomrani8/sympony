<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\Serializer\Serializer;
class UserJsonController extends AbstractController
{
    /**
     * @Route("/user/json", name="app_user_json")
     */
    public function index(): Response
    {
        return $this->render('user_json/index.html.twig', [
            'controller_name' => 'UserJsonController',
        ]);
    }
    
/**
     * @Route("/json/addUser", name="addUser")
     */
    public function addUser(Request $request) {

        $em = $this->getDoctrine()->getManager();


       
        $nom = $request->get("nom");
        $prenom = $request->get("prenom");
        $email = $request->get("email");
        $mdp = $request->get("mdp");
        $age = $request->get("age");


      
        $user = new User();
        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setMdp($mdp);
        $user->setAge($age);       
        
        $em->persist($user);
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
}
