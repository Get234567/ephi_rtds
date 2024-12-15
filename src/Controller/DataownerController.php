<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Dataowner;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\DataownerType;
use App\Repository\DataownerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\EPHISecurity;

     /**
      * @Route("/dataowner")
      */
     class DataownerController extends AbstractController
     {

         private $security;
         public function __construct(EPHISecurity $ePHISecurity)
         {
             $this->security=$ePHISecurity;
         }

         /**
          * @Route("/", name="Data_unit_index", methods={"GET","POST"})
          */

public function index(Request $request,DataownerRepository $DataownerRepository,PaginatorInterface $paginator): Response
{
    $dataowner = new Dataowner();
    $form = $this->createForm(DataownerType::class, $dataowner);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($dataowner);
        $entityManager->flush();

        return $this->redirectToRoute('Data_unit_index');
    }
    $search=$request->query->get('search');
    $queryBuilder = $DataownerRepository->findData($search);
    $data = $paginator->paginate(
        $queryBuilder, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
    return $this->render('dataowner/index.html.twig', [
        'data' => $data,
        'form' => $form->createView(),
        'link' => 'data_owner',
        'name' => 'Dataowner',

    ]);
}

/**
 * @Route("/new", name="Data_unit_new", methods={"GET","POST"})
 */
public function new(Request $request): Response
{
    $dataowner = new Dataowner();
    $form = $this->createForm(DataownerType::class, $dataowner);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        $entityManager = $this->getDoctrine()->getManager();

        $entityManager->persist($dataowner);
        $entityManager->flush();

        return $this->redirectToRoute('Data_unit_index');
    }

    return $this->render('dataowner/new.html.twig', [
        'row' => $dataowner,
        'form' => $form->createView(),
        'link' => 'data_owner',
        'name' => 'dataowner',
    ]);
}

/**
 * @Route("/{id}", name="Data_unit_show", methods={"GET"})
 */
public function show(Dataowner $dataowner): Response
{
    return $this->render('dataowner/show.html.twig', [
        'row' => $dataowner,
        'link' => 'data_owner',
        'name' => 'dataowner',
    ]);
}

/**
 * @Route("/{id}/edit", name="Data_unit_edit", methods={"GET","POST"})
 */
public function edit(Request $request, Dataowner $dataowner): Response
{
    $form = $this->createForm(DataownerType::class, $dataowner);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('Data_unit_index');
    }

    return $this->render('dataowner/edit.html.twig', [
        'form' => $form->createView(),
        'row' => $dataowner,
        'link' => 'data_owner',
        'name' => 'dataowner',
    ]);
}

/**
 * @Route("/{id}", name="Data_unit_delete", methods={"DELETE"})
 */
public function delete(Request $request, Dataowner $dataowner): Response
{
    if ($this->isCsrfTokenValid('delete'.$dataowner->getId(), $request->request->get('_token'))) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($dataowner);
        $entityManager->flush();
    }

    return $this->redirectToRoute('Data_unit_index');
}
}
