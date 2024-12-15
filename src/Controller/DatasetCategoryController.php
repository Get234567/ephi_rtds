<?php

namespace App\Controller;

use App\Entity\DatasetCategory;
use App\Form\DatasetCategoryType;
use App\Repository\DatasetCategoryRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;



/**
 * @Route("/datasetcategory")
 */
class DatasetCategoryController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="dataset_category_index")
     */
    public function index(Request $request,PaginatorInterface $paginator,DatasetCategoryRepository $datasetCategoryRepository): Response
    {


        $datasetCategory = new DatasetCategory();
        $form = $this->createForm(DatasetCategoryType::class, $datasetCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($datasetCategory);
            $entityManager->flush();

            return $this->redirectToRoute('dataset_category_index');
        }

        $search=$request->query->get('search');
        $queryBuilder = $datasetCategoryRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Dataset Category',
            'link' => 'dataset_category',
        ]);
    }

  

    /**
     * @Route("/{id}", name="dataset_category_show", methods={"GET"})
     */
    public function show(DatasetCategory $datasetCategory): Response
    {
        return $this->render('dataset_category/show.html.twig', [
            'dataset_category' => $datasetCategory,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dataset_category_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DatasetCategory $datasetCategory): Response
    {
        $form = $this->createForm(DatasetCategoryType::class, $datasetCategory);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dataset_category_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'dataset_category' => $datasetCategory,
            'form' => $form->createView(),
            'name' => 'Dataset Category',
            'link' => 'dataset_category',
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_category_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DatasetCategory $datasetCategory): Response
    {
        if ($this->isCsrfTokenValid('delete'.$datasetCategory->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($datasetCategory);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dataset_category_index');
    }
}
