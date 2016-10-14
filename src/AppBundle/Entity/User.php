<?php 
# php bin/console doctrine:database:create
# php bin/console doctrine:schema:update --force
# sudo chown -R _mysql /usr/local/var/mysql
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
    /**
     * @ORM\Column(type="array", nullable=true))
     */
    protected $group_ids;

    function __construct() {
        $this->group_ids = array();
    }

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

    public function setGroupId($id) {
        if (count($this->group_ids == 0)) {
            $this->group_ids = array();
        }
        array_push($this->group_ids, $id);
    }

    public function deleteGroup($id) {
        $ind = array_search($id, $this->group_ids);
        array_splice($this->group_ids, $ind, 1);
    }

    public function getGroupids() {
        return $this->group_ids;
    }

    public function setName($first, $last) {
        $this->first = $first;
        $this->last = $last;
    }

    public function getName() {
        return "{$this->first} {$this->last}";
    }

    /*
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}


