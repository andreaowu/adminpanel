<?php 
// http://symfony.com/doc/current/forms.html
namespace AppBundle\Entity;

class Group {
    protected $name;
    protected $users;

    function __construct($given_name) {
        $this->name = $given_name;
        $this->users = array();
    }

    public function getName() {
        return $this->name;
    }
    
    public function getUsers() {
        return $this->users;
    }

    public function addUser($user) {
        array_push($this->users, $user);
    }

    public function deleteUser($user) {
        $ind = array_search($this->users, $user);
        array_splice($this->users, $ind, 1);
    }
}


