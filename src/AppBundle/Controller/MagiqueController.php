<?php 

// src/AppBundle/Controller/MagiqueController.php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MagiqueController extends Controller
{
    /**
     * @Route("/numero/magique")
     */
    public function numeroAction()
    {
        $numero = mt_rand(0, 100);

        return $this->render('default/numero.html.twig', array(
            'numero' => $numero,
        ));
    }

}