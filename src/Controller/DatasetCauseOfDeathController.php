<?php

namespace App\Controller;

use App\Entity\DatasetCauseOfDeath;
use App\Form\DatasetCauseOfDeathType;
use App\Repository\DatasetCauseOfDeathRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dataset/cause/of/death")
 */
class DatasetCauseOfDeathController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="dataset_cause_of_death_index", methods={"GET"})
     */
    public function index(DatasetCauseOfDeathRepository $datasetCauseOfDeathRepository): Response
    {
        return $this->render('dataset_cause_of_death/index.html.twig', [
            'dataset_cause_of_deaths' => $datasetCauseOfDeathRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="dataset_cause_of_death_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $datasetCauseOfDeath = new DatasetCauseOfDeath();
        $form = $this->createForm(DatasetCauseOfDeathType::class, $datasetCauseOfDeath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($datasetCauseOfDeath);
            $entityManager->flush();

            return $this->redirectToRoute('dataset_cause_of_death_index');
        }

        return $this->render('dataset_cause_of_death/new.html.twig', [
            'dataset_cause_of_death' => $datasetCauseOfDeath,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_cause_of_death_show", methods={"GET"})
     */
    public function show(DatasetCauseOfDeath $datasetCauseOfDeath): Response
    {
        return $this->render('dataset_cause_of_death/show.html.twig', [
            'dataset_cause_of_death' => $datasetCauseOfDeath,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dataset_cause_of_death_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DatasetCauseOfDeath $datasetCauseOfDeath): Response
    {
        $form = $this->createForm(DatasetCauseOfDeathType::class, $datasetCauseOfDeath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dataset_cause_of_death_index');
        }

        return $this->render('dataset_cause_of_death/edit.html.twig', [
            'dataset_cause_of_death' => $datasetCauseOfDeath,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_cause_of_death_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DatasetCauseOfDeath $datasetCauseOfDeath): Response
    {
        if ($this->isCsrfTokenValid('delete'.$datasetCauseOfDeath->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($datasetCauseOfDeath);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dataset_cause_of_death_index');
    }
}
