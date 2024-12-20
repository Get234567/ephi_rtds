<?php

namespace App\Controller;

use App\Entity\EmailMessage;
use App\Form\EmailMessageType;
use App\Repository\EmailMessageRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/email/message")
 */
class EmailMessageController extends AbstractController
{
    /**
     * @Route("/", name="email_message_index", methods={"GET"})
     */
    public function index(EmailMessageRepository $emailMessageRepository): Response
    {
        return $this->render('email_message/index.html.twig', [
            'email_messages' => $emailMessageRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="email_message_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $emailMessage = new EmailMessage();
        $form = $this->createForm(EmailMessageType::class, $emailMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $emailMessage->setCreatedAt(new DateTime('now'));
            if($this->getUser())
            $emailMessage->setCreatedBy($this->getUser());
            $entityManager->persist($emailMessage);
            $entityManager->flush();

            return $this->redirectToRoute('email_message_index');
        }

        return $this->render('email_message/new.html.twig', [
            'email_message' => $emailMessage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="email_message_show", methods={"GET"})
     */
    public function show(EmailMessage $emailMessage): Response
    {
        return $this->render('email_message/show.html.twig', [
            'email_message' => $emailMessage,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="email_message_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EmailMessage $emailMessage): Response
    {
        $form = $this->createForm(EmailMessageType::class, $emailMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $emailMessage->setCreatedAt(new DateTime('now'));
            if($this->getUser())
            $emailMessage->setCreatedBy($this->getUser());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('email_message_index');
        }

        return $this->render('email_message/edit.html.twig', [
            'email_message' => $emailMessage,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="email_message_delete", methods={"DELETE"})
     */
    public function delete(Request $request, EmailMessage $emailMessage): Response
    {
        if ($this->isCsrfTokenValid('delete'.$emailMessage->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($emailMessage);
            $entityManager->flush();
        }

        return $this->redirectToRoute('email_message_index');
    }
}
