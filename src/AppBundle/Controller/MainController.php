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
        $org = new Organization();
        $user = new User();
        #$user_create_form = $this->createForm(AddUserType::class, $user);
        $user_create_form = $this->get('form.factory')
                                 ->createNamedBuilder('user_create', AddUserType::class, $user)->getForm();
        $user_delete_form = $this->get('form.factory')->createNamedBuilder('user_delete', 'form', null)
                                 ->add('Name:', ChoiceType::class, 
                                   ['choices' => $this->getOrgUsers($org),
                                    'choice_label' => function ($name, $key, $index) {
                                       return $name;
                                    },
                                    'choices_as_values' => true,
                                    'compound' => true,
                                   ])
                                 ->add('Delete user', 'submit', array())
                                 ->getForm();
        $group = new Group();
        $group_create_form = $this->get('form.factory')
                                  ->createNamedBuilder('group_create', AddGroupType::class, $group)->getForm();

        $request = $this->get('request_stack')->getCurrentRequest();
        if ($request->getMethod() == 'POST')
        {
            if ($request->request->has('user_create')) {
                $user_create_form->bind($request);
                $user->setFirst($user_create_form->get('first')->getData());
                $user->setLast($user_create_form->get('last')->getData());
                $org->addUser($user);
                return new Response('User Created!');
            } else if ($request->request->has('user_delete')) {
                $user_delete_form->bind($request);
                print_r("hello world");
                print_r($user_delete_form->getData());#deleteUser($user_delete_form->get('users')->getData()));
                return new Response('User Deleted!');
            } else if ($request->request->has('group_create')) {
                $group_create_form->bind($request);
                $group->setName($group_create_form->get('name')->getData());
                $org->addGroup($group);
                return new Response('Group Created!');
#                } else if ($request->request->has('group_delete')) {
#                } else if ($request->request->has('user_assign_to_group')) {
#                } else if ($request->request->has('user_remove_from_group')) {
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

    private function getOrgUsers($org) {
        $name = array("Name");
        return array_merge($name, $org->getUsers());
    } 

}
