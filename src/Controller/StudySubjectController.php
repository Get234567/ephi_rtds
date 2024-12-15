<?php

namespace App\Controller;

use App\Entity\StudySubject;
use App\Form\StudySubjectType;
use App\Repository\StudySubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/study/subject")
 */
class StudySubjectController extends AbstractController
{
    /**
     * @Route("/", name="study_subject_index", methods={"GET"})
     */
    public function index(StudySubjectRepository $studySubjectRepository): Response
    {
        return $this->render('study_subject/index.html.twig', [
            'study_subjects' => $studySubjectRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="study_subject_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studySubject = new StudySubject();
        $form = $this->createForm(StudySubjectType::class, $studySubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studySubject);
            $entityManager->flush();

            return $this->redirectToRoute('study_subject_index');
        }

        return $this->render('study_subject/new.html.twig', [
            'study_subject' => $studySubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_subject_show", methods={"GET"})
     */
    public function show(StudySubject $studySubject): Response
    {
        return $this->render('study_subject/show.html.twig', [
            'study_subject' => $studySubject,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_subject_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudySubject $studySubject): Response
    {
        $form = $this->createForm(StudySubjectType::class, $studySubject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_subject_index');
        }

        return $this->render('study_subject/edit.html.twig', [
            'study_subject' => $studySubject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_subject_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudySubject $studySubject): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studySubject->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studySubject);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_subject_index');
    }
}
