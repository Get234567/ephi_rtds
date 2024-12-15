<?php

namespace App\Controller;

use App\Entity\SystemFeedback;
use App\Form\SystemFeedbackType;
use App\Repository\SystemFeedbackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/system/feedback")
 */
class SystemFeedbackController extends AbstractController
{
    /**
     * @Route("/", name="system_feedback_index", methods={"GET"})
     */
    public function index(SystemFeedbackRepository $systemFeedbackRepository): Response
    {
        return $this->render('system_feedback/index.html.twig', [
            'system_feedbacks' => $systemFeedbackRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="system_feedback_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $systemFeedback = new SystemFeedback();
        $form = $this->createForm(SystemFeedbackType::class, $systemFeedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $systemFeedback->setSubmittedDate(new \DateTime());
            $entityManager->persist($systemFeedback);

            $entityManager->flush();

            return $this->redirectToRoute('system_feedback_index');
        }

        return $this->render('system_feedback/new.html.twig', [
            'system_feedback' => $systemFeedback,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="system_feedback_show", methods={"GET"})
     */
    public function show(SystemFeedback $systemFeedback): Response
    {
        return $this->render('system_feedback/show.html.twig', [
            'system_feedback' => $systemFeedback,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="system_feedback_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SystemFeedback $systemFeedback): Response
    {
        $form = $this->createForm(SystemFeedbackType::class, $systemFeedback);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('system_feedback_index');
        }

        return $this->render('system_feedback/edit.html.twig', [
            'system_feedback' => $systemFeedback,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="system_feedback_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SystemFeedback $systemFeedback): Response
    {
        if ($this->isCsrfTokenValid('delete'.$systemFeedback->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($systemFeedback);
            $entityManager->flush();
        }

        return $this->redirectToRoute('system_feedback_index');
    }
}
