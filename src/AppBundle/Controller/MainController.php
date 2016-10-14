<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use AppBundle\Entity\Organization;
use AppBundle\Entity\Group;
use AppBundle\Form\AddUserType;
use AppBundle\Form\AddGroupType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MainController extends Controller
{

    /*
     * @Route("/", name="app")
     * @Template()
     */ 
    public function indexAction()
    {
        $user = new User();
        $group = new Group();
        $em = $this->getDoctrine();

        $allUsers = $this->getAllUsers($em);
        
        $user_create_form = $this->get('form.factory')
                                 ->createNamedBuilder('user_create', AddUserType::class, $user)->getForm();
        $user_delete_form = $this->createUserDelForm($allUsers, $user);
        $group_create_form = $this->get('form.factory')
                                  ->createNamedBuilder('group_create', AddGroupType::class, $group)->getForm();
        $request = $this->get('request_stack')->getCurrentRequest();

        if ($request->getMethod() == 'POST')
        {
            if ($request->request->has('user_create')) {
                $user_create_form->bind($request);
                $user->setFirst($user_create_form->get('first')->getData());
                $user->setLast($user_create_form->get('last')->getData());
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                return $this->createGoBackForm("User {$user->getName()} got created!");
            } else if ($request->request->has('user_delete')) {
                $user_delete_form->bind($request);
                print_r($user_delete_form->get('Name')->getData());
                $split_name = explode(" ", $user_delete_form->get('Name')->getData());
                #print_r($split_name);
                $user->setFirst($split_name[0]);
                $user->setLast($split_name[1]);
                $em->remove($user);
                $em->flush();
                return $this->createGoBackForm("User {$user->getName()} got deleted!");
            } else if ($request->request->has('group_create')) {
                $group_create_form->bind($request);
                $group->setName($group_create_form->get('name')->getData());
                return new Response('Group Created!');
#                } else if ($request->request->has('group_delete')) {
#                } else if ($request->request->has('user_assign_to_group')) {
#                } else if ($request->request->has('user_remove_from_group')) {
            } else if ($request->request->has('go_back')) {
                return $this->render('AppBundle:Main:index.html.twig', 
                    array('user_create_form'=>$user_create_form->createView(),
                          'user_delete_form'=>$user_delete_form->createView(),
                          'group_create_form'=>$group_create_form->createView()));
            } else {
                return new Response('Boo');
            }
            return $this->render('AppBundle:Main:index.html.twig', 
                array('user_create_form'=>$user_create_form->createView(),
                      'user_delete_form'=>$user_delete_form->createView(),
                      'group_create_form'=>$group_create_form->createView()));
                   
        }
        return $this->render('AppBundle:Main:index.html.twig', 
            array('user_create_form'=>$user_create_form->createView(),
                  'user_delete_form'=>$user_delete_form->createView(),
                  'group_create_form'=>$group_create_form->createView()));
    }

    private function getAllUsers($em) {
        $all = array();
        $allUsers = $em->getRepository('AppBundle:User')->findAll();
        
        for ($x = 0; $x < count($allUsers); $x++) {
            array_push($all, $allUsers[$x]->getName());
        }

        return $all;
    }

    private function createUserDelForm($names, $user) {
        return $this->get('form.factory')->createNamedBuilder('user_delete', 'form', null)
                    ->add('Name', ChoiceType::class, 
                         ['choices' => $names,
                          'choice_label' => function ($name, $key, $index) {
                               return $name;
                          },
                          'choices_as_values' => true,
                          'compound' => true,
                          'label' => ' ',
                          'empty_value' => false,
                          ])
                     ->add('Delete user', 'submit', array())
                     ->getForm();
    }

    public function createGoBackForm($msg) {
        $go_back_form = $this->get('form.factory')->createNamedBuilder('go_back', 'form', null)
                             ->add('Go Back', 'submit', array())->getForm();
        return $this->render('AppBundle:Main:success.html.twig', 
                             array('go_back_form'=>$go_back_form->createView(),
                                   'msg' => $msg));
    }

}
