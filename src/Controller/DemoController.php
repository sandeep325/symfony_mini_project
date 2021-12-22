<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DemoController extends AbstractController
{
    #[Route('/auth', name: 'demo')]
    public function index()
    {
        // echo "test";

      $regFrom  =   $this->createFormBuilder();

      
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
}
