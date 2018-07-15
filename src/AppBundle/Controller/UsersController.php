<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    /**
     * @Route("/app/users")
     */
    public function getUsers()
    {

        $users = $this->getDoctrine()->getRepository('AppBundle:Users')->findAll();

        return $this->render('users.html.twig', array(
            'users' => $users
        ));


    }
}