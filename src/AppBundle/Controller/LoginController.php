<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Controller\UsersController;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Users;

class LoginController extends Controller
{
    /**
     * @Route("/app/login")
     */
    public function loginPageData()
    {
        $session = new Session();
        $userdata = $session->get('userdata');

        //check if user is already loged in
        if (!empty($userdata))
        {
            return $this->redirectToRoute('app_mainpage_mainpagedata');
        }

        return $this->render('login.html.twig', array(
            
        ));
        
    }

    
    /**
     * @Route("/app/login/ajax")
     * check user credentials
     */
    public function login(Request $request)
    {
        //get datafrom AJAX request
        $send = $request->request->all();

        //check username and password
        $get = $this->getDoctrine()->getRepository('AppBundle:Users')->checkLogin($send['username'], $send['password']);

        //valid login: set session
        if (is_array($get))
        {
            $session = new Session();
            $userRights = $this->getDoctrine()->getRepository('AppBundle:ProfilesOptions')->getUserRightsFromProfile($get['p_id']);
            $get['userrigths'] = $userRights[0];
            $session->set('userdata', $get);
            return new JsonResponse($get);
        }

        //3 bad login attemts: lock user account
        if ($send['login_attempts'] == 3)
        {
            $this->maxLoginAttemptsReached($send['username']);
            return JsonResponse('max_loging_attempts_reached');
        }
    }

    
    /**
     * @Route("/app/logout/ajax")
     * logout and clear session
     * redirect to app/home in opinity.js
     */
    public function logOut()
    {
        $session = new Session();
        $session->invalidate();
        return new JsonResponse(true);
    }


    /**
     * @Route("/app/login_attempts/ajax")
     * account locked after 3 invalid login attempts
     * 
     */
    public function maxLoginAttemptsReached($userName)
    {
        //write isActive = false to user record in Users table
        $this->getDoctrine()->getRepository('AppBundle:Users')->lockAccount($userName);
        return new JsonResponse(true);
    }
}