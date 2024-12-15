<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RequestTypeController extends AbstractController
{
    /**
     * @Route("/request/type", name="request_type")
     */
    public function index()
    {
        return $this->render('request_type/index.html.twig', [
            'controller_name' => 'RequestTypeController',
        ]);
    }
}
