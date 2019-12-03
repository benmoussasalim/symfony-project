<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index()
    {

        $repository = $this->getDoctrine()->getRepository(Produit::class);


        $products = $repository->findBy( array (), array () , $limit = 9, $offset = 0);

//        dump($products);
//        die();


        return $this->render('produit/index.html.twig', [
            'products' => $products,
        ]);
    }
}
