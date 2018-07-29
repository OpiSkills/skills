<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Profiles;

class ProfilesRepository extends EntityRepository
{
	public function findAllOrderedByName()
    {
        return $this->getEntityManager()->createQuery(
            'SELECT p FROM AppBundle:Profiles p ORDER BY p.profileName ASC'
        )->getResult();
    }
}