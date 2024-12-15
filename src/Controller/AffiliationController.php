<?php

namespace App\Controller;

use App\Entity\Affiliation;
use App\Form\AffiliationType;
use App\Repository\AffiliationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/affiliation")
 */
class AffiliationController extends AbstractController
{
    /**
     * @Route("/", name="affiliation_index", methods={"GET"})
     */
    public function index(AffiliationRepository $affiliationRepository): Response
    {
        return $this->render('affiliation/index.html.twig', [
            'affiliations' => $affiliationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="affiliation_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $affiliation = new Affiliation();
        $form = $this->createForm(AffiliationType::class, $affiliation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($affiliation);
            $entityManager->flush();

            return $this->redirectToRoute('affiliation_index');
        }

        return $this->render('affiliation/new.html.twig', [
            'affiliation' => $affiliation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="affiliation_show", methods={"GET"})
     */
    public function show(Affiliation $affiliation): Response
    {
        return $this->render('affiliation/show.html.twig', [
            'affiliation' => $affiliation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="affiliation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Affiliation $affiliation): Response
    {
        $form = $this->createForm(AffiliationType::class, $affiliation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('affiliation_index');
        }

        return $this->render('affiliation/edit.html.twig', [
            'affiliation' => $affiliation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="affiliation_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Affiliation $affiliation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$affiliation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($affiliation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('affiliation_index');
    }
}
