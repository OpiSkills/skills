<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use AppBundle\AppBundle;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Controller\UsersController;
use Symfony\Component\HttpFoundation\Session\Session;

class MainPageController extends Controller
{
    /**
     * @Route("/app/")
     */
    public function appHome()
    {
        return $this->redirectToRoute('app_mainpage_mainpagedata');
    }

    /**
     * @Route("/app/home")
     */
    public function mainPageData()
    {
        $userData = \AppBundle\Controller\UsersController::checkIfLogedIn();
        if ($userData === false) return $this->redirectToRoute('app_login_loginpagedata');

        return $this->render('main.html.twig', array(
            'title' => 'Opinity Skill List',
            'sidebar' => 'sidebar',
            'header' => 'header',
            'userFullName' => $userData['userFullName'],
            'userRights' => $userData['userrigths'],
            'activePageClass' => 'home'
        ));
    }
}