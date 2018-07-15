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
        $credentials = $this->getUserCredentials();
        return $this->render('opinity.html.twig', array(
            'title' => 'Opinity Skill List',
            'sidebar' => 'sidebar',
            'header' => 'header',
            'add_user' => $credentials->UserTable->Create,
            'add_profile' => $credentials->ProfileTable->Create,
            'add_group' => $credentials->GroupTable->Create,
            'add_skill' => $credentials->SkillTable->Create
        ));
    }

    /**
     * get user rights from login
     * @param: get user ID from session (no input required)
     * @return: object with user rights
     */
    private function getUserCredentials()
    {
        $credentials = new \stdClass();
        $credentials->UserName = 'Toby.Versteeg';

        //demo
        $credentials->ProfileTable = new \stdClass();
        $credentials->ProfileTable->Create = true;
        $credentials->ProfileTable->Read = true;
        $credentials->ProfileTable->Update = true;
        $credentials->ProfileTable->Delete = true;

        $credentials->UserTable = new \stdClass();
        $credentials->UserTable->Create = true;
        $credentials->UserTable->Read = true;
        $credentials->UserTable->Update = true;
        $credentials->UserTable->Delete = true;

        $credentials->GroupTable = new \stdClass();
        $credentials->GroupTable->Create = true;
        $credentials->GroupTable->Read = true;
        $credentials->GroupTable->Update = true;
        $credentials->GroupTable->Delete = true;

        $credentials->SkillTable = new \stdClass();
        $credentials->SkillTable->Create = true;
        $credentials->SkillTable->Read = true;
        $credentials->SkillTable->Update = true;
        $credentials->SkillTable->Delete = true;        

        return $credentials;
    }
}