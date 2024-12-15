<?php

namespace App\Controller;

use App\Entity\StudyDatasetStatus;
use App\Form\StudyDatasetStatusType;
use App\Repository\StudyDatasetStatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/study/dataset/status")
 */
class StudyDatasetStatusController extends AbstractController
{
    /**
     * @Route("/", name="study_dataset_status_index", methods={"GET"})
     */
    public function index(StudyDatasetStatusRepository $studyDatasetStatusRepository): Response
    {
        return $this->render('study_dataset_status/index.html.twig', [
            'study_dataset_statuses' => $studyDatasetStatusRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="study_dataset_status_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studyDatasetStatus = new StudyDatasetStatus();
        $form = $this->createForm(StudyDatasetStatusType::class, $studyDatasetStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyDatasetStatus);
            $entityManager->flush();

            return $this->redirectToRoute('study_dataset_status_index');
        }

        return $this->render('study_dataset_status/new.html.twig', [
            'study_dataset_status' => $studyDatasetStatus,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_dataset_status_show", methods={"GET"})
     */
    public function show(StudyDatasetStatus $studyDatasetStatus): Response
    {
        return $this->render('study_dataset_status/show.html.twig', [
            'study_dataset_status' => $studyDatasetStatus,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_dataset_status_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyDatasetStatus $studyDatasetStatus): Response
    {
        $form = $this->createForm(StudyDatasetStatusType::class, $studyDatasetStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_dataset_status_index');
        }

        return $this->render('study_dataset_status/edit.html.twig', [
            'study_dataset_status' => $studyDatasetStatus,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_dataset_status_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyDatasetStatus $studyDatasetStatus): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyDatasetStatus->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyDatasetStatus);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_dataset_status_index');
    }
}
