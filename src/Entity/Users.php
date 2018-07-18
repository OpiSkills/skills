<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Users
 * @package AppBundle\Entity
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsersRepository")
 * @ORM\Table(name="Users")
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
    public $first_name;


    /**
     * @ORM\Column(type="string", name="last_name")
     *
     * @var string
     */
    public $last_name;


    /**
     * @ORM\Column(type="string", name="email")
     *
     * @var string
     */
    public $email;

    /**
     * @ORM\Column(type="string", name="city")
     *
     * @var string
     */
    public $city;

    /**
     * @ORM\OneToMany(targetEntity="Profiles", mappedBy="users")
     */
    private $profiles;

    public function __construct()
    {
        $this->profiles = new ArrayCollection();
    }
}