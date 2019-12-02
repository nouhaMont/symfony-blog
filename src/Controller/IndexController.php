<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * page d'accueil de site
     * @Route("/")
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }
}
