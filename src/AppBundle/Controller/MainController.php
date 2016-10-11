<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use AppBundle\Entity\Organization;
use AppBundle\Entity\Group;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller
{
    /*
     * @Route("/", name="app")
     * @Template()
     */ 
    public function indexAction()
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $request = $this->get('request_stack')->getCurrentRequest();
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST')
        {
            if ($form->isValid())
            {
                return new Response('User Created!');
            }
            return $this->render('AppBundle:Main:index.html.twig', array('form'=>$form->createView()));
        }
        return $this->render('AppBundle:Main:index.html.twig', array('form'=>$form->createView()));
    }

    public function adduserAction(Request $request)
    {
       print_r("hello world");
       $this->get('request')->request->get('name'); 
    }

}
