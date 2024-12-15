<?php

namespace App\Controller;

use App\Entity\Studydataset;
use App\Form\StudydatasetType;
use App\Repository\StudydatasetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/studydataset")
 */
class StudydatasetController extends AbstractController
{
    /**
     * @Route("/", name="studydataset_index", methods={"GET"})
     */
    public function index(StudydatasetRepository $studydatasetRepository): Response
    {
        return $this->render('studydataset/index.html.twig', [
            'studydatasets' => $studydatasetRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="studydataset_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studydataset = new Studydataset();
        $form = $this->createForm(StudydatasetType::class, $studydataset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studydataset);
            $entityManager->flush();

            return $this->redirectToRoute('studydataset_index');
        }

        return $this->render('studydataset/new.html.twig', [
            'studydataset' => $studydataset,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="studydataset_show", methods={"GET"})
     */
    public function show(Studydataset $studydataset): Response
    {
        return $this->render('studydataset/show.html.twig', [
            'studydataset' => $studydataset,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="studydataset_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Studydataset $studydataset): Response
    {
        $form = $this->createForm(StudydatasetType::class, $studydataset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('studydataset_index');
        }

        return $this->render('studydataset/edit.html.twig', [
            'studydataset' => $studydataset,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="studydataset_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Studydataset $studydataset): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studydataset->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studydataset);
            $entityManager->flush();
        }

        return $this->redirectToRoute('studydataset_index');
    }
}
