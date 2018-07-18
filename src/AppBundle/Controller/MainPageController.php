<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainPageController extends Controller
{
    /**
     * @Route("/app/home")
     */
    public function mainPageData()
    {
        return $this->render('opinity.html.twig', array(
            'title' => 'Opinity Skill List',
            'sidebar' => 'sidebar',
            'header' => 'header'
        ));
    }
}