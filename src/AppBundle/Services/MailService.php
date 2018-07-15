<?php

namespace AppBundle\Services;

use AppBundle\Repositories\UsersRepository;
use Doctrine\ORM\EntityManager;

/**(
 * Class MailService.
 *
 * @package AppBundle\Services
 */
class MailService
{
    /** @var \AppBundle\Repositories\UsersRepository */
    private $usersRepository;

    /**
     * MailService constructor.
     *
     * @param \AppBundle\Repositories\UsersRepository $usersRepository
     */
    public function __construct(UsersRepository $usersRepository)
    {
        $this->usersRepository = $usersRepository;
    }

    public function test()
    {
        return $this->usersRepository->getUsers();
    }
}