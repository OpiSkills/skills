<?php

namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TopBarController extends Controller
{
    /**
     * @Route("/")
     * @Route("/app/")
     */
    public function getMenuOptions()
    {

       return $this->render('topbar.html.twig', array(
            'menu_options' => '123'
        ));


    }
}