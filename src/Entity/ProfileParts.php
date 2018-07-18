<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfileParts
 *
 * @ORM\Table(name="profile_parts")
 * @ORM\Entity
 */
class ProfileParts
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
     * @var boolean
     *
     * @ORM\Column(name="user_create", type="boolean", nullable=false)
     */
    private $userCreate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_read", type="boolean", nullable=false)
     */
    private $userRead = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_update", type="boolean", nullable=false)
     */
    private $userUpdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="user_delete", type="boolean", nullable=false)
     */
    private $userDelete = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_create", type="boolean", nullable=false)
     */
    private $groupCreate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_read", type="boolean", nullable=false)
     */
    private $groupRead = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_update", type="boolean", nullable=false)
     */
    private $groupUpdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="group_delete", type="boolean", nullable=false)
     */
    private $groupDelete = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skill_create", type="boolean", nullable=false)
     */
    private $skillCreate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skill_read", type="boolean", nullable=false)
     */
    private $skillRead = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skill_update", type="boolean", nullable=false)
     */
    private $skillUpdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="skill_delete", type="boolean", nullable=false)
     */
    private $skillDelete = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="profile_create", type="boolean", nullable=false)
     */
    private $profileCreate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="proflle_read", type="boolean", nullable=false)
     */
    private $proflleRead = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="profile_update", type="boolean", nullable=false)
     */
    private $profileUpdate = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="profile_delete", type="boolean", nullable=false)
     */
    private $profileDelete = '0';


}

