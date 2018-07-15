<?php

namespace AppBundle\Repositories;

use AppBundle\Entity\Users;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class UsersRepository.
 *
 * @package AppBundle\Repositories
 */
class UsersRepository extends AbstractRepository
{
    /**
     * @return array
     */
    public function getUsers()
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getEntityManager();

        $em->beginTransaction();


        // sql

        $em->commit();


        $em->rollback();

        return $em->createQuery("SELECT u FROM Users u")->getResult();
    }

    /**
     * @param \AppBundle\Entity\Users $users
     */
    public function save(Users $users, ArrayCollection $skills = null)
    {
            $this->getEntityManager()->beginTransaction();

            /** @var \AppBundle\Entity\Users $user */
            $user = $this->getEntityManager()->find(Users::class, $id);

            $users->setSkills($skills);

            $this->getEntityManager()->persist($u);
            $this->getEntityManager()->remove($u);
            $this->getEntityManager()->flush();

            $this->getEntityManager()->commit();
    }
}