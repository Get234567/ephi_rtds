<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\DataType;
use App\Form\DataTypeType;
use App\Repository\DatasetRepository;
use App\Repository\DataTypeRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/data/type")
 */
class DataTypeController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="data_type_index", methods={"GET","POST"})
     */
    public function index(Request $request,DataTypeRepository $dataTypeRepository,PaginatorInterface $paginator): Response
    {

        $dataType = new DataType();
        $form = $this->createForm(DataTypeType::class, $dataType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dataType);
            $entityManager->flush();

            return $this->redirectToRoute('data_type_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $dataTypeRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Data Type',
            'link' => 'data_type',
        ]);
    }

    /**
     * @Route("/new", name="data_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $dataType = new DataType();
        $form = $this->createForm(DataTypeType::class, $dataType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dataType);
            $entityManager->flush();

            return $this->redirectToRoute('data_type_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'row' => $dataType,
            'form' => $form->createView(),
            'name' => 'Data Type',
            'link' => 'data_type',
        ]);
    }

    /**
     * @Route("/{id}", name="data_type_show", methods={"GET"})
     */
    public function show(DataType $dataType): Response
    {
        return $this->render('name_desc/show.html.twig', [
           
            'row' => $dataType,
           
            'name' => 'Data Type',
            'link' => 'data_type',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="data_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DataType $dataType): Response
    {
        $form = $this->createForm(DataTypeType::class, $dataType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('data_type_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $dataType,
            'form' => $form->createView(),
            'name' => 'Data Type',
            'link' => 'data_type',
        ]);
    }

    /**
     * @Route("/{id}", name="data_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DataType $dataType,DatasetRepository $datasetRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dataType->getId(), $request->request->get('_token'))) {
            if ($datasetRepository->findOneBy(['dataType'=> $dataType])) {
                $this->addFlash('warning','You cannot delete this item, it is being used by dataset !!!');
                return $this->redirectToRoute('data_type_index');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($dataType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('data_type_index');
    }
}
