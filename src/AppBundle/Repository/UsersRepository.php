<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;


class UsersRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()->createQuery(
                'SELECT u FROM AppBundle:Users u ORDER BY u.last_name ASC'
            )->getResult();
    }

    public function checkLogin($username, $password)
    {
    	return true;	
   	}
}