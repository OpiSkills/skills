<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Profiles
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfilesRepository")
 * @ORM\Table(name="profiles")
 */
class Profiles
{
    public function __construct()
    {
        $this->updateOn = date('Y-m-d H:i:s');
        $this->isActive = true;
        $this->isRemoved = false;
    }    

	/**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer
     */
    public $id;


    /**
     * @ORM\Column(name="created_on", type="datetime", options={"default": 0})
     */
    public $createdOn;


    /**
     * @ORM\Column(name="created_by", type="integer")
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
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    public $isActive;


    /**
     * @ORM\Column(name="removed", type="boolean", nullable=false)
     */
    public $isRemoved;

    /**
     * @ORM\Column(name="name", type="string", length=50)
     */
    public $profileName;


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
        return $this->isActive;
    }


    /**
     * @return boolean
     */
    public function getRemoved()
    {
        return $this->isRemoved;
    }


    /**
     * @return string
     */
    public function getProfileName()
    {
        return $this->profileName;
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
     * @return datetime
     */
    public function setUpdatedOn($updateOn = string)
    {
        $this->updatedOn = $updateOn;
    }


    /**
     * @return integer
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
     * @param string $profileName = string
     *
     * @return Profiles
     */
    public function setProfileName($profileName = string)
    {
        $this->profileName = $profileName;
    }
    


}