<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueiluserController extends AbstractController
{
    /**
     * @Route("/accueiluser", name="accueiluser")
     */
    public function index()
    {
        return $this->render('accueiluser/index.html.twig', [
            'controller_name' => 'AccueiluserController',
        ]);
    }



    /**
     * @Route("/accueiladmin", name="accueiladmin")
     */
    public function accueiladmin()
    {
        return $this->render('acceuilAdmin/Accueil.twig', [
            'controller_name' => 'AccueiluserController',
        ]);
    }



}
