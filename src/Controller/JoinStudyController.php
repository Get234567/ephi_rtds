<?php

namespace App\Controller;

use App\Entity\JoinStudy;
use App\Form\JoinStudyType;
use App\Repository\JoinStudyRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/join/study")
 */
class JoinStudyController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="join_study_index", methods={"GET"})
     */
    public function index(JoinStudyRepository $joinStudyRepository): Response
    {
        return $this->render('join_study/index.html.twig', [
            'join_studies' => $joinStudyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="join_study_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $joinStudy = new JoinStudy();
        $form = $this->createForm(JoinStudyType::class, $joinStudy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($joinStudy);
            $entityManager->flush();

            return $this->redirectToRoute('join_study_index');
        }

        return $this->render('join_study/new.html.twig', [
            'join_study' => $joinStudy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="join_study_show", methods={"GET"})
     */
    public function show(JoinStudy $joinStudy): Response
    {
        return $this->render('join_study/show.html.twig', [
            'join_study' => $joinStudy,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="join_study_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, JoinStudy $joinStudy): Response
    {
        $form = $this->createForm(JoinStudyType::class, $joinStudy);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('join_study_index');
        }

        return $this->render('join_study/edit.html.twig', [
            'join_study' => $joinStudy,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="join_study_delete", methods={"DELETE"})
     */
    public function delete(Request $request, JoinStudy $joinStudy): Response
    {
        if ($this->isCsrfTokenValid('delete'.$joinStudy->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($joinStudy);
            $entityManager->flush();
        }

        return $this->redirectToRoute('join_study_index');
    }
}
