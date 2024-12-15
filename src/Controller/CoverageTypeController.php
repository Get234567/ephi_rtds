<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\CoverageType;
use App\Form\CoverageTypeType;
use App\Repository\CoverageTypeRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/coverage/type")
 */
class CoverageTypeController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }
    /**
     * @Route("/", name="coverage_type_index")
     */
    public function index(CoverageTypeRepository $coverageTypeRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $coverageType = new CoverageType();
        $form = $this->createForm(CoverageTypeType::class, $coverageType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($coverageType);
            $entityManager->flush();

            return $this->redirectToRoute('coverage_type_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $coverageTypeRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Coverage type',
            'link' => 'coverage_type',
        ]);
    }

    /**
     * @Route("/new", name="coverage_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $coverageType = new CoverageType();
        $form = $this->createForm(CoverageTypeType::class, $coverageType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($coverageType);
            $entityManager->flush();

            return $this->redirectToRoute('coverage_type_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'coverage_type' => $coverageType,
            'form' => $form->createView(),
            'name' => 'Coverage type',
            'link' => 'coverage_type',
        ]);
    }

    /**
     * @Route("/{id}", name="coverage_type_show", methods={"GET"})
     */
    public function show(CoverageType $coverageType): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $coverageType,
            'name' => 'Coverage type',
            'link' => 'coverage_type',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="coverage_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CoverageType $coverageType): Response
    {
        $form = $this->createForm(CoverageTypeType::class, $coverageType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('coverage_type_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $coverageType,
            'form' => $form->createView(),
            'name' => 'Coverage type',
            'link' => 'coverage_type',
        ]);
    }

    /**
     * @Route("/{id}", name="coverage_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CoverageType $coverageType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coverageType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($coverageType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('coverage_type_index');
    }
}
