<?php 
// http://symfony.com/doc/current/forms.html
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {
   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id; 
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=50)
     */
    protected $first;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=50)
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

    public function getName() {
        return "{$this->getFirst()} {$this->getLast()}";
    }

    /*
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}


