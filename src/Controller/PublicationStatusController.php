<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\PublicationStatus;
use App\Form\PublicationStatusType;
use App\Repository\PublicationStatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/publication/status")
 */
class PublicationStatusController extends AbstractController
{
    /**
     * @Route("/", name="publication_status_index")
     */
    public function index(PublicationStatusRepository $publicationStatusRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $publicationStatus = new PublicationStatus();
        $form = $this->createForm(PublicationStatusType::class, $publicationStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($publicationStatus);
            $entityManager->flush();

            return $this->redirectToRoute('publication_status_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $publicationStatusRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name'=>'publication status',
            'link'=>'publication_status',
            
        ]);
    }

  

    /**
     * @Route("/{id}", name="publication_status_show", methods={"GET"})
     */
    public function show(PublicationStatus $publicationStatus): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $publicationStatus,
            'link'=>'publication_status',
            'name'=>'publication status',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="publication_status_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PublicationStatus $publicationStatus): Response
    {
        $form = $this->createForm(PublicationStatusType::class, $publicationStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publication_status_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $publicationStatus,
            'form' => $form->createView(),
            'name'=>'publication status',
            'link'=>'publication_status',
        ]);
    }

    /**
     * @Route("/{id}", name="publication_status_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PublicationStatus $publicationStatus): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publicationStatus->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($publicationStatus);
            $entityManager->flush();
        }

        return $this->redirectToRoute('publication_status_index');
    }
}
