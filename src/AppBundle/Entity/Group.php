<?php 
namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
*/
class Group {
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string", length=50, unique=true)
     */
    protected $name;
    /**
     * @ORM\Column(type="array", nullable=true);
     */
    protected $user_ids;

    function __construct() {
        $this->user_ids = array();
    }

    public function setName($given_name) {
        $this->name = $given_name;
    }

    public function getName() {
        return $this->name;
    }

    public function getUserIds() {
        return $this->user_ids;
    }

    public function getUsers() {
        $usernames = array();
        for ($x = 0; $x < count($this->$user_ids); $x++) {
            array_push($this->$user_ids[$x]->getName(), $usernames);
        }
        return $usernames;
    }

    public function hasUser($user) {
        return in_array($user->getId(), $this->user_ids);
    }

    public function addUser($userId) {
        array_push($this->user_ids, $userId);
    }

    public function deleteUser($userId) {
        $ind = array_search($userId, $this->user_ids);
        array_splice($this->user_ids, $ind, 1);
    }

    private function getUserName($user) {
        return "{$user->getFirst()} {$user->getLast()}";
    }

    /*
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}


