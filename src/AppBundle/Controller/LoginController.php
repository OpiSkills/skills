<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/app/login")
     */
    public function mainPageData()
    {

        return $this->render('login.html.twig', array(
            'user' => 'Toby Versteeg'
        ));

        
    }

    /**
     * @Route("/app/login/ajax")
     */
    public function login(Request $request)
    {
    	$send = $request->request->all();
    	$this->getDoctrine()->getRepository('AppBundle:Users')
       		->checkLogin($send['username'], $send['password']);
    		
		return new JsonResponse($send['username']);
    }

}