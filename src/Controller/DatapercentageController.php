<?php

namespace App\Controller;

use App\Entity\Datapercentage;
use App\Form\DatapercentageType;
use App\Repository\DatapercentageRepository;
use App\Entity\Dataowner;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\PermissionChecker;
use App\Services\EPHISecurity;
/**
 * @Route("/datapercentage")
 */

class DatapercentageController extends AbstractController
{

  private $security;
public function __construct(EPHISecurity $ePHISecurity)
{
    $this->security=$ePHISecurity;
}

/**
 * @Route("/", name="percentage_index", methods={"GET","POST"})
 */
public function index(Request $request, DatapercentageRepository $DatapercentageRepository, PaginatorInterface $paginator): Response
{

    $Datapercentage = new Datapercentage();
    $form = $this->createForm(DatapercentageType::class, $Datapercentage);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Datapercentage);
        $entityManager->flush();

        return $this->redirectToRoute('percentage_index');
    }
    $search=$request->query->get('search');
    $queryBuilder = $DatapercentageRepository->findData($search);
    $data = $paginator->paginate(
        $queryBuilder, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );
    return $this->render('datapercentage/index.html.twig', [
        'data' => $data,
        'form' => $form->createView(),
        'link' => 'datapercentage',
        'name' => 'datapercentage',
    ]);
}

/**
 * @Route("/new", name="percentage_new", methods={"GET","POST"})
 */
public function new(Request $request): Response
{
    $Datapercentage = new Datapercentage();
    $form = $this->createForm(DatapercentageType::class, $Datapercentage);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($Datapercentage);
        $entityManager->flush();

        return $this->redirectToRoute('percentage_index');
    }

    return $this->render('datapercentage/new.html.twig', [
        'Datapercentage' => $Datapercentage,
        'form' => $form->createView(),
        'link' => 'datapercentage',
        'name' => 'datapercentage',
    ]);
}

/**
 * @Route("/{id}", name="percentage_show", methods={"GET"})
 */
public function show(Datapercentage $Datapercentage): Response
{
    return $this->render('datapercentage/show.html.twig', [
        'row' => $Datapercentage,
        'link' => 'datapercentage',
        'name' => 'datapercentage',
    ]);
}

/**
 * @Route("/{id}/edit", name="percentage_edit", methods={"GET","POST"})
 */
public function edit(Request $request, Datapercentage $Datapercentage): Response
{
    $form = $this->createForm(DatapercentageType::class, $Datapercentage);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('percentage_index');
    }

    return $this->render('datapercentage/edit.html.twig', [
        'row' => $Datapercentage,
        'form' => $form->createView(),
        'link' => 'datapercentage',
        'name' => 'datapercentage',
    ]);
}

/**
 * @Route("/{id}", name="percentage_delete", methods={"DELETE"})
 */
public function delete(Request $request, Datapercentage $Datapercentage): Response
{
    if ($this->isCsrfTokenValid('delete'.$Datapercentage->getId(), $request->request->get('_token'))) {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($Datapercentage);
        $entityManager->flush();
    }

    return $this->redirectToRoute('percentage_index');
}
}
