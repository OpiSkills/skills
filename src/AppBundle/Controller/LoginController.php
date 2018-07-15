<?php

namespace AppBundle\Controller;

use AppBundle\Services\MailService;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{
    /** @var \AppBundle\Services\MailService */
    private $mailService;

    /**
     * LoginController constructor.
     *
     * @param \AppBundle\Services\MailService $mailService
     */
    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    /**
     * @Route("/app/login")
     */
    public function mainPageData()
    {
        $this->connectDB();

        return $this->render('login.html.twig', array(
            'user' => 'Toby Versteeg',
            'mail' => print_r($this->mailService->test(), true)
        ));

        
    }

    private function connectDB()
    {
        $config = new \Doctrine\DBAL\Configuration();
        $connectionParams = array(
            'dbname' => 'opinity',
            'user' => 'opinity',
            'password' => 'Jp1mFuxbmQQ',
            'host' => 'localhost',
            'driver' => 'pdo_mysql',
        );
        $conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
        $sql = "SELECT * FROM Users";
        $res = $conn->query($sql); 
        $data = array();
        while ($row = $res->fetch()) {
            $data[] = $row;
        }
        return $data;
    }
}