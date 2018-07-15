<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Skills.
 *
 * @package AppBundle\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="Skills")
 */
class Skills
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @var integer
     */
    protected $Id;
}
