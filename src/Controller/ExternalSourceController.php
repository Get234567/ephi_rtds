<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\ExternalSource;
use App\Form\ExternalSourceType;
use App\Repository\ExternalSourceRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/external/source")
 */
class ExternalSourceController extends AbstractController
{
    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="external_source_index", methods={"GET"})
     */
    public function index(ExternalSourceRepository $externalSourceRepository): Response
    {
        return $this->render('external_source/index.html.twig', [
            'external_sources' => $externalSourceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="external_source_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $externalSource = new ExternalSource();
        $form = $this->createForm(ExternalSourceType::class, $externalSource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($externalSource);
            $entityManager->flush();

            return $this->redirectToRoute('external_source_index');
        }

        return $this->render('external_source/new.html.twig', [
            'external_source' => $externalSource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="external_source_show", methods={"GET"})
     */
    public function show(ExternalSource $externalSource): Response
    {
        return $this->render('external_source/show.html.twig', [
            'external_source' => $externalSource,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="external_source_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ExternalSource $externalSource): Response
    {
        $form = $this->createForm(ExternalSourceType::class, $externalSource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('external_source_index');
        }

        return $this->render('external_source/edit.html.twig', [
            'external_source' => $externalSource,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="external_source_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ExternalSource $externalSource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$externalSource->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($externalSource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('external_source_index');
    }
}
