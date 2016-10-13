<?php 
// http://symfony.com/doc/current/forms.html
namespace AppBundle\Entity;
//http://stackoverflow.com/questions/17450280/how-to-include-a-custom-class-in-a-symfony-bundle

class Organization {
    protected $groupnames;
    protected $usernames;

    function __construct() {
        $this->groupnames = array();
        $this->usernames = array();
    }

    public function addUser($user) {
        array_push($this->usernames, $user->getFirst()." ".$user->getLast());
    }

    public function deleteUser($first, $last) {
        $ind = array_search($this->usernames, 
                $first." ".$last);
        array_splice($this->usernames, $ind, 1);
    }

    public function getUsers() {
        return $this->usernames;
    }

    public function addGroup($group) {
        array_push($this->groupnames, $group->getName());
    }

    public function deleteGroup($group) {
        $ind = array_search($this->groupnames, $group->getName());
        array_splice($this->groupnames, $ind, 1);
    }

    public function getGroups($group) {
        return $this->groupnames;
    }

}


