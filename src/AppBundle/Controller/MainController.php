<?php 
# alphabetical order: https://knpuniversity.com/screencast/symfony-forms/custom-entity-type-query#play
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
        $em = $this->getDoctrine(); # for database usage
        $user = new User();
        $group = new Group();
        $allUsers = $this->getAll($em, 'AppBundle:User'); # gets all users
        $allGroups = $this->getAll($em, 'AppBundle:Group'); # gets all groups
        
        # Make all different forms that go on the page
        $user_create_form = $this->createEntityForm('user_create', new AddUserType(), $user);
        $user_delete_form = $this->createDelForm('user_delete', $allUsers, $user);
        $assign_user_form = $this->userAndGroupForm('assign_to_group', 
                                   'Add User to Group', $allUsers, $allGroups);
        $delete_user_group_form = $this->userAndGroupForm('delete_from_group', 
                                         'Delete User from Group',$allUsers, $allGroups);
        $group_create_form = $this->createEntityForm('group_create', 
                                    new AddGroupType(), $group);
        $group_delete_form = $this->createDelForm('group_delete', $allGroups, $group);

        $request = $this->get('request_stack')->getCurrentRequest();
        
        if ($request->getMethod() == 'POST') {
            $em = $this->getDoctrine()->getManager();
            if ($request->request->has('user_create')) {
                $user_create_form->bind($request);
                $user->setName($user_create_form->get('first')->getData(), 
                               $user_create_form->get('last')->getData());
                return $this->processData($em, $user, "User {$user->getName()} got created!", 1);
            } else if ($request->request->has('user_delete')) {
                $user_delete_form->bind($request);
                $user = $this->findUser($user_delete_form, "name", $em);
                if (is_null($user)) {
                    return $this->createGoBackForm("Invalid input, no changes!");
                }
                $groupIds = $user->getGroupIds();
                foreach($groupIds as $id) {
                    $em->getRepository('AppBundle:Group')->findOneById($id)->deleteUser($user->getId());
                }
                return $this->processData($em, $user, "User {$user->getName()} got deleted!", 0);
            } else if ($request->request->has('group_create')) {
                $group_create_form->bind($request);
                $group->setName($group_create_form->get('name')->getData());
                return $this->processData($em, $group, "Group {$group->getName()} got created!", 1);
            } else if ($request->request->has('group_delete')) {
                $group_delete_form->bind($request);
                $group = $this->findGroup($group_delete_form, "name", $em);
                $users = $group->getUserIds();
                if (is_null($group)) {
                    return $this->createGoBackForm("Invalid input, no changes!");
                }
                foreach($users as $user) {
                    $em->getRepository('AppBundle:Group')->findById($user)->deleteGroup($group->getId());
                }
                return $this->processData($em, $group, "Group {$group->getName()} got deleted!", 0);
            } else if ($request->request->has('assign_to_group')) {
                $assign_user_form->bind($request);
                $user = $this->findUser($assign_user_form, "users", $em);
                $group = $this->findGroup($assign_user_form, "groups", $em);
                if (is_null($user) || is_null($group)) {
                    return $this->createGoBackForm("Invalid input, no changes!");
                }
                foreach ($user->getGroupIds() as $id) {
                    if ($id == $group->getId()) {
                        return $this->createGoBackForm("User {$user->getName()} is already 
                                                       in {$group->getName()} group!");
                    }
                }
                $group->addUser($user->getId());
                $user->setGroupId($group->getId());
                $em->persist($group);
                return $this->processData($em, $user, "User {$user->getName()} got 
                                          added to {$group->getName()} group!", 1);
            } else if ($request->request->has('delete_from_group')) {
                $delete_user_group_form->bind($request);
                $user = $this->findUser($delete_user_group_form, "users", $em);
                $group = $this->findGroup($delete_user_group_form, "groups", $em);
                if (is_null($user) || is_null($group)) {
                    return $this->createGoBackForm("Invalid input, no changes!");
                }
                $group->deleteUser($user->getId());
                $user->deleteGroup($group->getId());
                $em->persist($group);
                return $this->processData($em, $user, "User {$user->getName()} got 
                                          deleted from {$group->getName()} group!", 1);
            }
            return $this->renderIndexPage($user_create_form, $user_delete_form, 
                                          $group_create_form, $group_delete_form,
                                          $assign_user_form, $delete_user_group_form);
        }
        return $this->renderIndexPage($user_create_form, $user_delete_form, 
                                      $group_create_form, $group_delete_form,
                                      $assign_user_form, $delete_user_group_form);
    }

    /**
     * Gets all users or groups in the database
     */
    private function getAll($em, $bundle) {
        $all = array();
        $allUsers = $em->getRepository($bundle)->findAll();
        
        for ($x = 0; $x < count($allUsers); $x++) {
            $name = $allUsers[$x]->getName();
            $all[$name] = $name;
        }
        return $all;
    }

    /**
     * Creates user or group deletion form
     */
    private function createDelForm($form_name, $choices, $entity) {
        return $this->get('form.factory')->createNamedBuilder($form_name, 'form', null)
                    ->add('name', 'choice', array("choices" => $choices))
                    ->add("Delete {$entity->getName()}", 'submit')
                    ->getForm();
    }

    /**
     * Creates user or group creation form
     */
    public function createEntityForm($name, $type, $entity) {
        return $this->get('form.factory')
                    ->createNamedBuilder($name, $type, $entity)->getForm();
    }

    /**
     * Creates form for users and groups
     */
    public function userAndGroupForm($form_name, $submit_button, $allUsers, $allGroups) {
         return $this->get('form.factory')->createNamedBuilder($form_name, 'form', null)
                     ->add('users', 'choice', array("choices" => $allUsers))
                     ->add('groups', 'choice', array("choices" => $allGroups))
                     ->add($submit_button, 'submit')
                     ->getForm();
    }

    /**
     * Creates form to go back to home page
     */
    public function createGoBackForm($msg) {
        $go_back_form = $this->get('form.factory')->createNamedBuilder('go_back', 'form', null)
                             ->add('Go Back', 'submit', array())->getForm();
        return $this->render('AppBundle:Main:success.html.twig', 
                             array('go_back_form'=>$go_back_form->createView(),
                                   'msg' => $msg));
    }

    /**
     * Creates index page to render
     */
    public function renderIndexPage($user_create_form, $user_delete_form, 
                                    $group_create_form, $group_delete_form,
                                    $assign_user_form, $delete_user_group_form) {
        return $this->render('AppBundle:Main:index.html.twig', 
            array('user_create_form' => $user_create_form->createView(),
                  'user_delete_form' => $user_delete_form->createView(),
                  'group_create_form' => $group_create_form->createView(),
                  'group_delete_form' => $group_delete_form->createView(),
                  'assign_user_form' => $assign_user_form->createView(),
                  'delete_user_group_form' => $delete_user_group_form->createView()));
    }

    /**
     * Finds user from dataabase
     */
    public function findUser($form, $field, $em) {
        $data = $form->get($field)->getData();
        if (count($data) == 0) {
            return null;
        }
        $split_name = explode(" ", $data);
        $repository = $em->getRepository('AppBundle:User');
        $user = $repository->findOneBy(array('first' => $split_name[0], 'last' => $split_name[1]));
        return $user;
    }

    /**
     * Finds group from dataabase
     */
    public function findGroup($form, $field, $em) {
        $data = $form->get($field)->getData();
        if (count($data) == 0) {
            return null;
        }
        $repository = $em->getRepository('AppBundle:Group');
        $group = $repository->findOneBy(array('name' => $data)); 
        return $group;
    }

    /**
     * Writes given information to database and renders new page
     */
    public function processData($em, $entity, $return_string, $add) {
        if ($add == 1) {
            $em->persist($entity);
        } else {
            $em->remove($entity);
        }
        $em->flush();
        return $this->createGoBackForm($return_string);
    }

}
