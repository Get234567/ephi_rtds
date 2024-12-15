<?php

namespace App\Controller;

use App\Entity\StudyDatasetLinkRequest;
use App\Form\StudyDatasetLinkRequestType;
use App\Repository\StudyDatasetLinkRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/study/dataset/link/request")
 */
class StudyDatasetLinkRequestController extends AbstractController
{
    /**
     * @Route("/", name="study_dataset_link_request_index", methods={"GET"})
     */
    public function index(StudyDatasetLinkRequestRepository $studyDatasetLinkRequestRepository): Response
    {
        return $this->render('study_dataset_link_request/index.html.twig', [
            'study_dataset_link_requests' => $studyDatasetLinkRequestRepository->findAll(),
        ]);
    }
  



    
   

    /**
     * @Route("/new", name="study_dataset_link_request_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studyDatasetLinkRequest = new StudyDatasetLinkRequest();
        $form = $this->createForm(StudyDatasetLinkRequestType::class, $studyDatasetLinkRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyDatasetLinkRequest);
            $entityManager->flush();

            return $this->redirectToRoute('study_dataset_link_request_index');
        }

        return $this->render('study_dataset_link_request/new.html.twig', [
            'study_dataset_link_request' => $studyDatasetLinkRequest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_dataset_link_request_show", methods={"GET"})
     */
    public function show(StudyDatasetLinkRequest $studyDatasetLinkRequest): Response
    {
        return $this->render('study_dataset_link_request/show.html.twig', [
            'study_dataset_link_request' => $studyDatasetLinkRequest,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_dataset_link_request_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyDatasetLinkRequest $studyDatasetLinkRequest): Response
    {
        $form = $this->createForm(StudyDatasetLinkRequestType::class, $studyDatasetLinkRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_dataset_link_request_index');
        }

        return $this->render('study_dataset_link_request/edit.html.twig', [
            'study_dataset_link_request' => $studyDatasetLinkRequest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_dataset_link_request_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyDatasetLinkRequest $studyDatasetLinkRequest): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyDatasetLinkRequest->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyDatasetLinkRequest);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_dataset_link_request_index');
    }
}
