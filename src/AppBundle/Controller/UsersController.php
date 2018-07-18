<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\AppBundle;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UsersController extends Controller
{

    public function __construct() {
        
    }

    /**
     * @Route("/app/users")
     */
    public function getUsers()
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findAllOrderedByName();
        
        return $this->render('users.html.twig', array(
            'users' => $this->getDoctrine()->getRepository(Users::class)->findAllOrderedByName()
        ));
    }
}