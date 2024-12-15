<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestpageController extends AbstractController
{
    /**
     * @Route("/testpage", name="testpage")
     */
    public function index()
    {
        return $this->render('testpage/index.html.twig', [
            'controller_name' => 'TestpageController',
        ]);
    }
}
