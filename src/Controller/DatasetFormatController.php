<?php

namespace App\Controller;

use App\Entity\DatasetFormat;
use App\Form\DatasetFormatType;
use App\Repository\DatasetFormatRepository;
use App\Repository\DatasetRepository;
use App\Services\EPHISecurity;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/datasetformat")
 */
class DatasetFormatController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="dataset_format_index")
     */
    public function index(DatasetFormatRepository $datasetFormatRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $datasetformat = new DatasetFormat();
        $form = $this->createForm(DatasetFormatType::class, $datasetformat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($datasetformat);
            $entityManager->flush();

            return $this->redirectToRoute('dataset_format_index');
        }

        $search=$request->query->get('search');
        $queryBuilder = $datasetFormatRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        
        
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Dataset format',
            'link' => 'dataset_format',
        ]);
    }

 

    /**
     * @Route("/{id}", name="dataset_format_show", methods={"GET"})
     */
    public function show(DatasetFormat $datasetFormat): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $datasetFormat,
            'name' => 'Dataset format',
            'link' => 'dataset_format',

        ]);
    }

    /**
     * @Route("/{id}/edit", name="dataset_format_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DatasetFormat $datasetFormat): Response
    {
        $form = $this->createForm(DatasetFormatType::class, $datasetFormat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success',"Dataset Format Edited Successfully");
            return $this->redirectToRoute('dataset_format_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $datasetFormat,
            'form' => $form->createView(),
            'name' => 'Dataset format',
            'link' => 'dataset_format',
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_format_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DatasetFormat $datasetFormat,DatasetRepository $datasetRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$datasetFormat->getId(), $request->request->get('_token'))) {
            
            if ($datasetRepository->findOneBy(['format'=> $datasetFormat])) {
                $this->addFlash('warning','You cannot delete this item, it is being used by dataset !!!');
                return $this->redirectToRoute('dataset_format_index');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($datasetFormat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dataset_format_index');
    }
}
