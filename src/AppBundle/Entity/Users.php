<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Users
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 * @ORM\Table(name="users")
 */
class Users
{
	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer
     */
    public $id;


    /**
     * @ORM\Column(name="created_on", type="datetime", nullable=true, options={"default": 0})
     */
    public $createdOn;


    /**
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    public $createdBy;


    /**
     * @ORM\Column(name="updated_on", type="datetime", nullable=true)
     */
    public $updatedOn;


    /**
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    public $updateBy;


    /**
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default": true})
     */
    public $isActive;


    /**
     * @ORM\Column(name="removed", type="boolean", nullable=true, options={"default": false})
     */
    public $isRemoved;


    /**
     * @ORM\Column(name="first_name", type="string", length=40, nullable=false)
     *
     * @var string 
     */
    public $firstName;


    /**
     * @ORM\Column(name="insertion", type="string", length=15, nullable=true)
     *
     */
    public $insertion;


    /**
     * @ORM\Column(name="last_name", type="string", length=80, nullable=false)
     *
     */
    public $lastName;


    /**
     * @ORM\Column(name="street", type="string", length=80, nullable=false)
     *
     */
    public $street;


    /**
     * @ORM\Column(name="housenumber", type="string", length=10, nullable=false)
     *
     */
    public $houseNumber;


    /**
     * @ORM\Column(name="postalcode", type="string", length=10, nullable=false)
     *
     */
    public $postalCode;


    /**
     * @ORM\Column(name="city", type="string", length=40, nullable=false)
     *
     */
    public $city;


    /**
     * @ORM\Column(name="email", type="string", length=80, nullable=false)
     *
     */
    public $email;


    /**
     * @ORM\Column(name="username", type="string", length=20, nullable=false)
     *
     */
    public $userName;


    /**
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     *
     */
    public $passWord;


    /**
     * @ORM\Column(name="date_of_birth", type="date", nullable=true)
     *
     */
    public $birthDay;


    /**
     * @ORM\ManyToOne(targetEntity="Groups", inversedBy="users")
     * @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     */
    public $groupId;


    /**
     * @ORM\ManyToOne(targetEntity="Profiles", inversedBy="users")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    public $profileId;


    /* GETTERS ------------------------------------------------------------------------------------------------------- */


    /**
     * @return integer
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @return datetime
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }


    /**
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }


    /**
     * @return datetime
     */
    public function getUpdatedOn()
    {
        return $this->updatedOn;
    }


    /**
     * @return integer
     */
    public function getUpdatedBy()
    {
        return $this->updateBy;
    }


    /**
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }


    /**
     * @return boolean
     */
    public function getRemoved()
    {
        return $this->removed;
    }


    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }


    /**
     * @return string
     */
    public function getInsertion()
    {
        return $this->insertion;
    }


    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }


    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }


    /**
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }


    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }


    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }


    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->userName;
    }


    /**
     * @return string
     */
    public function getPassWord()
    {
        return $this->passWord;
    }


    /* SETTERS ------------------------------------------------------------------------------------------------------- */


    /**
     * @return integer
     */
    public function setCreatedBy($userId = integer)
    {
        $this->createdBy = $userId;
    }


    /**
     * 
     */
    public function setUpdatedOn($updateOn = string)
    {
        $this->updatedOn = $updateOn;
    }


    /**
     * 
     */
    public function setUpdatedBy($userId = integer)
    {
        $this->updateBy = $userId;
    }
    
    /**
     * @param string $active = boolean
     *
     * @return Users
     */
    public function setIsActive($active = boolean)
    {
        $this->isActive = $active;
    }


    /**
     * @param string $removed = boolean
     *
     * @return Users
     */
    public function setIsRemoved($removed = boolean)
    {
        $this->isRemoved = $removed;
    }


    /**
     * @param string $firstName = string
     *
     * @return Users
     */
    public function setFirstName($firstName = string)
    {
        $this->firstName = $firstName;
    }


    /**
     * @return string
     *
     * @return Users
     */
    public function setInsertion($insertion = string)
    {
        return $this->insertion;
    }


    /**
     * @param string $lastName = string
     *
     * @return Users
     */
    public function setLastName($lastName = string)
    {
        $this->lastName = $lastName;
    }


    /**
     * 
     */
    public function setStreet($street = string)
    {
        $this->street = $street;
    }


    /**
     * 
     */
    public function setHouseNumber($houseNumber = string)
    {
        $this->houseNumber = $houseNumber;
    }


    /**
     * 
     */
    public function setPostalCode($postalCode = string)
    {
        $this->postalCode = $postalCode;
    }


    /**
     * 
     */
    public function setCity($city = string)
    {
        $this->city = $city;
    }


    /**
     * 
     */
    public function setEmail($email = string)
    {
        $this->email = $email;
    }


    /**
     * 
     */
    public function setUsername($userName = string)
    {
        $this->userName = $userName;
    }


    /**
     * 
     */
    public function setPassWord($passWord = string)
    {
        $this->passWord = $passWord;
    }

}