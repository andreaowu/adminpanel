<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /*
     * @Route("/", name="app")
     * @Template()
     */ 
    public function indexAction()
    {
        return $this->render('AppBundle:Main:index.html.twig');
    }

}
