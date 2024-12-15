<?php

namespace App\Controller;

use App\Entity\DatasetStudySubject;
use App\Form\DatasetStudySubjectType;
use App\Repository\DatasetStudySubjectRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dataset/study/subject")
 */
class DatasetStudySubjectController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="dataset_study_subject_index", methods={"GET"})
     */
    public function index(DatasetStudySubjectRepository $datasetStudySubjectRepository): Response
    {
        return $this->render('dataset_study_subject/index.html.twig', [
            'dataset_study_subjects' => $datasetStudySubjectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="dataset_study_subject_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $datasetStudySubject = new DatasetStudySubject();
        $form = $this->createForm(DatasetStudySubjectType::class, $datasetStudySubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($datasetStudySubject);
            $entityManager->flush();
            $this->addFlash('success',"Dataset Study Subject Added Successfully");
            return $this->redirectToRoute('dataset_study_subject_index');
        }

        return $this->render('dataset_study_subject/new.html.twig', [
            'dataset_study_subject' => $datasetStudySubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_study_subject_show", methods={"GET"})
     */
    public function show(DatasetStudySubject $datasetStudySubject): Response
    {
        return $this->render('dataset_study_subject/show.html.twig', [
            'dataset_study_subject' => $datasetStudySubject,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dataset_study_subject_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DatasetStudySubject $datasetStudySubject): Response
    {
        $form = $this->createForm(DatasetStudySubjectType::class, $datasetStudySubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success',"Dataset Study Subject Edited Successfully");
            return $this->redirectToRoute('dataset_study_subject_index');
        }

        return $this->render('dataset_study_subject/edit.html.twig', [
            'dataset_study_subject' => $datasetStudySubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_study_subject_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DatasetStudySubject $datasetStudySubject): Response
    {
        if ($this->isCsrfTokenValid('delete'.$datasetStudySubject->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($datasetStudySubject);
            $entityManager->flush();
            $this->addFlash('success',"Dataset Study Subject Deleted Successfully");
        }

        return $this->redirectToRoute('dataset_study_subject_index');
    }
}
