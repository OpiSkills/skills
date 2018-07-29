<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class UsersController extends Controller
{

    /**
     * @Route("/app/users")
     */
    public function getUsers()
    {
        //verify login
        $userData = $this->checkIfLogedIn();
        if ($userData === false) return $this->redirectToRoute('app_login_loginpagedata');
        
        return $this->render('users.html.twig', array(
            'users' => $this->getDoctrine()->getRepository(Users::class)->findAllOrderedByName(),
            'userFullName' => $userData['userFullName'],
            'userRights' => $userData['userrigths'],
            'activePageClass' => 'users',
            'crudActions' => $this->getCrudBar($userData['userrigths'], 'users')
        ));
    }


    public static function checkIfLogedIn()
    {
        $session = new Session();
        return !empty($session->get('userdata')) ? $session->get('userdata') : false;
    }
    

    public static function getCrudBar($userRights, $section)
    {
        $section = trim(strtolower($section));

        switch ($section)
        {
            case 'profile':
            case 'profiles':
                $crud = array(
                    'create'  => $userRights['profileCreate'],
                    'read'    => $userRights['profileRead'],
                    'update'  => $userRights['profileUpdate'],
                    'delete'  => $userRights['profileDelete']
                );
            break;

            case 'user':
            case 'users':
                $crud = array(
                    'create'  => $userRights['userCreate'],
                    'read'    => $userRights['userRead'],
                    'update'  => $userRights['userUpdate'],
                    'delete'  => $userRights['userDelete']
                );
            break;

            case 'skill':
            case 'skills':
                $crud = array(
                    'create'  => $userRights['skillCreate'],
                    'read'    => $userRights['skillRead'],
                    'update'  => $userRights['skillUpdate'],
                    'delete'  => $userRights['skillDelete']
                );
            break;

            case 'group':
            case 'groups':
                $crud = array(
                    'create'  => $userRights['groupCreate'],
                    'read'    => $userRights['groupRead'],
                    'update'  => $userRights['groupUpdate'],
                    'delete'  => $userRights['groupDelete']
                );
            break;
        }

        return $crud;
    }
}