<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EasyDashboardController extends AbstractController
{
    /**
     * @Route("/easy/dashboard", name="easy_dashboard")
     */
    public function index()
    {
        return $this->render('easy_dashboard/index.html.twig', [
            'controller_name' => 'EasyDashboardController',
        ]);
    }
}
