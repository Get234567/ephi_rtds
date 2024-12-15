<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EasyAdminController extends AbstractController
{
    /**
     * @Route("/EasyAdmin", name="EasyAdmin")
     */
    public function index()
    {
        return $this->render('EasyAdmin/page/login.html.twig', [
            'controller_name' => 'EasyAdminController',
        ]);
    }
}
