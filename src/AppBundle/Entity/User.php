<?php 
// http://symfony.com/doc/current/forms.html
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class User {
    
    /**
     * @Assert\NotBlank()
     */
    protected $first;
    /**
     * @Assert\NotBlank()
     */
    protected $last;

    public function setFirst($firstname) {
        $this->first = $firstname;
    }

    public function getFirst() {
        return $this->first;
    }

    public function setLast($lastname) {
        $this->last = $lastname;
    }

    public function getLast() {
        return $this->last;
    }

}


