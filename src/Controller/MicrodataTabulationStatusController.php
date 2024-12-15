<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\MicrodataTabulationStatus;
use App\Form\MicrodataTabulationStatusType;
use App\Repository\MicrodataTabulationStatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/microdata/tabulation/status")
 */
class MicrodataTabulationStatusController extends AbstractController
{
    /**
     * @Route("/", name="microdata_tabulation_status_index")
     */
    public function index(MicrodataTabulationStatusRepository $microdataTabulationStatusRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $microdataTabulationStatus = new MicrodataTabulationStatus();
        $form = $this->createForm(MicrodataTabulationStatusType::class, $microdataTabulationStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($microdataTabulationStatus);
            $entityManager->flush();

            return $this->redirectToRoute('microdata_tabulation_status_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $microdataTabulationStatusRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'microdata tabulation status',
            'link' => 'microdata_tabulation_status'
        ]);
    }

    /**
     * @Route("/new", name="microdata_tabulation_status_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $microdataTabulationStatus = new MicrodataTabulationStatus();
        $form = $this->createForm(MicrodataTabulationStatusType::class, $microdataTabulationStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($microdataTabulationStatus);
            $entityManager->flush();

            return $this->redirectToRoute('microdata_tabulation_status_index');
        }

        return $this->render('microdata_tabulation_status/new.html.twig', [
            'microdata_tabulation_status' => $microdataTabulationStatus,
            'form' => $form->createView(),

            'name' => 'microdata tabulation status',
            'link' => 'microdata_tabulation_status'
        ]);
    }

    /**
     * @Route("/{id}", name="microdata_tabulation_status_show", methods={"GET"})
     */
    public function show(MicrodataTabulationStatus $microdataTabulationStatus): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $microdataTabulationStatus,

            'name' => 'microdata tabulation status',
            'link' => 'microdata_tabulation_status'
        ]);
    }

    /**
     * @Route("/{id}/edit", name="microdata_tabulation_status_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MicrodataTabulationStatus $microdataTabulationStatus): Response
    {
        $form = $this->createForm(MicrodataTabulationStatusType::class, $microdataTabulationStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('microdata_tabulation_status_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $microdataTabulationStatus,
            'form' => $form->createView(),

            'name' => 'microdata tabulation status',
            'link' => 'microdata_tabulation_status'
        ]);
    }

    /**
     * @Route("/{id}", name="microdata_tabulation_status_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MicrodataTabulationStatus $microdataTabulationStatus): Response
    {
        if ($this->isCsrfTokenValid('delete'.$microdataTabulationStatus->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($microdataTabulationStatus);
            $entityManager->flush();
        }

        return $this->redirectToRoute('microdata_tabulation_status_index');
    }
}
