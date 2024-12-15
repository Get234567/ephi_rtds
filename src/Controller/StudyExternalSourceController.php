<?php

namespace App\Controller;

use App\Entity\StudyExternalSource;
use App\Form\StudyExternalSourceType;
use App\Repository\StudyExternalSourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/study/external/source")
 */
class StudyExternalSourceController extends AbstractController
{
    /**
     * @Route("/", name="study_external_source_index", methods={"GET"})
     */
    public function index(StudyExternalSourceRepository $studyExternalSourceRepository): Response
    {
        return $this->render('study_external_source/index.html.twig', [
            'study_external_sources' => $studyExternalSourceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="study_external_source_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studyExternalSource = new StudyExternalSource();
        $form = $this->createForm(StudyExternalSourceType::class, $studyExternalSource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyExternalSource);
            $entityManager->flush();

            return $this->redirectToRoute('study_external_source_index');
        }

        return $this->render('study_external_source/new.html.twig', [
            'study_external_source' => $studyExternalSource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{study}", name="study_external_source_show", methods={"GET"})
     */
    public function show(StudyExternalSource $studyExternalSource): Response
    {
        return $this->render('study_external_source/show.html.twig', [
            'study_external_source' => $studyExternalSource,
        ]);
    }

    /**
     * @Route("/{study}/edit", name="study_external_source_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyExternalSource $studyExternalSource): Response
    {
        $form = $this->createForm(StudyExternalSourceType::class, $studyExternalSource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_external_source_index');
        }

        return $this->render('study_external_source/edit.html.twig', [
            'study_external_source' => $studyExternalSource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{study}", name="study_external_source_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyExternalSource $studyExternalSource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyExternalSource->getStudy(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyExternalSource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_external_source_index');
    }
}
