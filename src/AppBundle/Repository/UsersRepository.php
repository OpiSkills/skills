<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Users;
use AppBundle\Entity\Profiles;

class UsersRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.firstName, u.insertion, u.lastName, u.email, u.city, p.profileName')
        ->from('AppBundle:Users', 'u')
        ->leftJoin(
            'AppBundle:Profiles', 'p',
            \Doctrine\ORM\Query\Expr\Join::WITH,
            'p.id = u.profileId');
        $result = $qb->getQuery()->getArrayResult();

        return $result;
    }


    public function checkLogin($username, $password)
    {
    	//create query
    	$em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('u.id AS u_id, u.passWord, u.firstName, u.isActive, u.insertion, u.lastName, u.email, u.city, p.id as p_id, p.profileName')
        ->from('AppBundle:Users', 'u')
        ->leftJoin(
            'AppBundle:Profiles', 'p',
            \Doctrine\ORM\Query\Expr\Join::WITH,
            'p.id = u.profileId')
        ->where('u.userName = :username')->setParameter('username', $username);
        $result = $qb->getQuery()->getArrayResult();

    	//no result. return 'false:false': username doesn't exist
    	if (empty($result)) return 'false:false';

    	//check password(_hash) and return array() or if no match: return false;
    	if (password_verify($password, $result[0]['passWord']) === true && $result[0]['isActive'] == true)
    	{
    		unset($result[0]['password']);
            $result[0]['userFullName'] = $result[0]['firstName'] . (!empty($result[0]) ? ' ' . $result[0]['insertion'] . ' ' : '') . $result[0]['lastName'];
    		return $result[0];
    	}

        //username existst, password incorrect
		return 'true:false';
    }


    public function lockAccount($userId)
    {
        
    }
 }