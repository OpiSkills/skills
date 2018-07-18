<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Profiles
 *
 * @ORM\Table(name="profiles")
 * @ORM\Entity
 */
class Profiles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="profiles")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     */
    private $profile_id

    


}

