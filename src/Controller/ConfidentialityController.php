<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Confidentiality;
use App\Form\ConfidentialityType;
use App\Repository\ConfidentialityRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/confidentiality")
 */
class ConfidentialityController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="confidentiality_index")
     */
    public function index(ConfidentialityRepository $confidentialityRepository,Request $request,PaginatorInterface $paginator): Response
    {

        $confidentiality = new Confidentiality();
        $form = $this->createForm(ConfidentialityType::class, $confidentiality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($confidentiality);
            $entityManager->flush();

            return $this->redirectToRoute('confidentiality_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $confidentialityRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'link' => 'confidentiality',
            'name' => 'Confidentiality',
        ]);
    }

    /**
     * @Route("/new", name="confidentiality_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $confidentiality = new Confidentiality();
        $form = $this->createForm(ConfidentialityType::class, $confidentiality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($confidentiality);
            $entityManager->flush();

            return $this->redirectToRoute('confidentiality_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'confidentiality' => $confidentiality,
            'form' => $form->createView(),
            'link' => 'confidentiality',
            'name' => 'Confidentiality',
        ]);
    }

    /**
     * @Route("/{id}", name="confidentiality_show", methods={"GET"})
     */
    public function show(Confidentiality $confidentiality): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $confidentiality,
            'link' => 'confidentiality',
            'name' => 'Confidentiality',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="confidentiality_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Confidentiality $confidentiality): Response
    {
        $form = $this->createForm(ConfidentialityType::class, $confidentiality);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('confidentiality_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $confidentiality,
            'form' => $form->createView(),
            'link' => 'confidentiality',
            'name' => 'Confidentiality',
        ]);
    }

    /**
     * @Route("/{id}", name="confidentiality_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Confidentiality $confidentiality): Response
    {
        if ($this->isCsrfTokenValid('delete'.$confidentiality->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($confidentiality);
            $entityManager->flush();
        }

        return $this->redirectToRoute('confidentiality_index');
    }
}
