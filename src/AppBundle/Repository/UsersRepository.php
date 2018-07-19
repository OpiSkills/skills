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
    	//create password hash
    	$options = array("cost" => 4);
		$hashPassword = password_hash($password, PASSWORD_BCRYPT, $options);

		//instances EntityManager:createQueryBuilder
    	$em = $this->getEntityManager();
    	$qb = $em->createQueryBuilder();

    	//create query
    	$qb->select('u.Id, u.password, u.firstName, u.last_name')
    		->from('AppBundle:Users', 'u')
    		->where('u.username = :username')->setParameter('username', $username)
    		->setMaxResults(1);
    	$result = $qb->getQuery()->getResult();

    	//no result? return false
    	if (empty($result)) return false;

    	//check password(_hash) and return array() or if no match: return false;
    	if (password_verify($password, $result[0]['password']) === true)
    	{
    		unset($result[0]['password']);
    		return $result[0];
    	}
    	else
    	{
    		return false;
    	}
    	    	
    }
 }