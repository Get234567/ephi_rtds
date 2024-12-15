<?php

namespace App\Controller;
use App\Entity\DataSubmission;
use App\Entity\WorkUnit;
use App\Repository\WorkUnitRepository;
use App\Repository\DataSubmissionRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DataSubmissionController extends AbstractController
{
    /**
     * @Route("/data/submission", name="data_submission")
     */
    public function index()
    {
        return $this->render('data_submission/index.html.twig', [
            'controller_name' => 'DataSubmissionController',
        ]);
    }
}
