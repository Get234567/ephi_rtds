<?php

namespace App\Controller;

use App\Entity\StudyDataType;
use App\Form\StudyDataTypeType;
use App\Repository\StudyDataTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/study/data/type")
 */
class StudyDataTypeController extends AbstractController
{
    /**
     * @Route("/", name="study_data_type_index", methods={"GET"})
     */
    public function index(StudyDataTypeRepository $studyDataTypeRepository): Response
    {
        return $this->render('study_data_type/index.html.twig', [
            'study_data_types' => $studyDataTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="study_data_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studyDataType = new StudyDataType();
        $form = $this->createForm(StudyDataTypeType::class, $studyDataType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyDataType);
            $entityManager->flush();

            return $this->redirectToRoute('study_data_type_index');
        }

        return $this->render('study_data_type/new.html.twig', [
            'study_data_type' => $studyDataType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_data_type_show", methods={"GET"})
     */
    public function show(StudyDataType $studyDataType): Response
    {
        return $this->render('study_data_type/show.html.twig', [
            'study_data_type' => $studyDataType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_data_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyDataType $studyDataType): Response
    {
        $form = $this->createForm(StudyDataTypeType::class, $studyDataType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_data_type_index');
        }

        return $this->render('study_data_type/edit.html.twig', [
            'study_data_type' => $studyDataType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_data_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyDataType $studyDataType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyDataType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyDataType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_data_type_index');
    }
}
