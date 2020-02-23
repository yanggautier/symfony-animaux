<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function index()
    {
        return $this->render('famille/familles.html.twig');
    }
}
