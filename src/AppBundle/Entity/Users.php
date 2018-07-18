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
    protected $Id;

    /**
     * @ORM\Column(type="string", name="first_name")
     *
     * @var string
     */
    public $firstName;


    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    public $insertion;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    public $last_name;

    /**
     * @ORM\Column(type="boolean");
     *
     * @var boolean
     */
    public $active;

    /**
     * @ORM\Column(type="string");
     *
     * @var string
     */
    public $email;

    /**
     * @ORM\Column(type="string", length=50);
     *
     * @var string
     */
    public $city;

    /**
     * @ORM/OneToMany(targetEntity="Skills")
     *
     * @var \AppBundle\Entity\Skills
     */


    /**
     * @ORM\Column(type="string", name="username", length=20)
     *
     * @var string
     */
    public $username;


    /**
     * @ORM\Column(type="string", name="password", length=255)
     *
     * @var string
     */
    protected $password;

    /**
     * @ORM\ManyToOne(targetEntity="Profiles", inversedBy="Users")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    public $profile_id;


    
    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $first_name
     *
     * @return Users
     */
    public function setFirstName($first_name)
    {
        $this->firstName = $first_name;

        return $this;
    }

    /**
     * @return string
     */
    public function getInsertion()
    {
        return $this->insertion;
    }

    /**
     * @param string $insertion
     *
     * @return Users
     */
    public function setInsertion($insertion)
    {
        $this->insertion = $insertion;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     *
     * @return Users
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return Users
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Users
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    public function setSkills($skill)
    {
        $this->skills = $skill;
    }

    public function getSkills()
    {
        return $this->skills;
    }
}
