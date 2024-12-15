<?php

namespace App\Controller;

use App\Entity\Dataapprove;
use App\Form\DataapproveType;
use App\Repository\DataapproveRepository;
use App\Repository\FosUserRepository;
use App\Repository\WorkUnitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Knp\Component\Pager\PaginatorInterface;
use App\Service\PermissionChecker;
use App\Services\EPHISecurity;

/**
 * @Route("/dataapprove")
  */

class DataapproveController extends AbstractController
{
  private $security;

  public function __construct(EPHISecurity $sec)
  {
      $this->security = $sec;
  }



    /**
     * @Route("/", name="dataapprove_type_index", methods={"GET","POST"})
     */
    public function index(Request $request,DataapproveRepository $DataapproveRepository,PaginatorInterface $paginator): Response
    {
      $dataapprove = new Dataapprove();
      $form = $this->createForm(DataapproveType::class, $dataapprove);
      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($dataapprove);
          $entityManager->flush();

          return $this->redirectToRoute('dataapprove_type_index');
      }
      $search=$request->query->get('search');
      $queryBuilder = $DataapproveRepository->findData($search);
      $data = $paginator->paginate(
          $queryBuilder, /* query NOT result */
          $request->query->getInt('page', 1)/*page number*/,
          10/*limit per page*/
      );
        return $this->render('dataapprove/index.html.twig', [
          'data' => $data,
          'form' => $form->createView(),
          'user_id' => 'user_id',
          'work_unit_id' => 'work_unit_id',

        ]);
    }
    public function new(Request $request): Response
    {
        $dataapprove= new Dataapprove();
        $form = $this->createForm(DataapproveType::class, $dataapprove);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($dataapprove);
            $entityManager->flush();

            return $this->redirectToRoute('dataapprove_type_index');
        }

        return $this->render('dataapprove/new.html.twig', [
            'row' => $dataapprove,
            'form' => $form->createView(),
            'user_id' => 'user_id',
            'work_unit_id' => 'work_unit_id',
        ]);
    }

    /**
     * @Route("/{id}", name="dataapprove_type_show", methods={"GET"})
     */
    public function show(Dataapprove $dataapprove): Response
    {
        return $this->render('dataapprove/show.html.twig', [

            'row' => $dataapprove,

            'user_id' => 'user_id',
            'work_unit_id' => 'work_unit_id',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="dataapprove_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Dataapprove $dataapprove): Response
    {
        $form = $this->createForm(DataapproveType::class, $dataapprove);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('dataapprove_type_index');
        }

        return $this->render('dataapprove/edit.html.twig', [
            'row' => $dataapprove,
            'form' => $form->createView(),
            'user_id' => 'user_id',
            'work_unit_id' => 'work_unit_id',
        ]);
    }

    /**
     * @Route("/{id}", name="dataapprove_type_delete", methods={"DELETE"})
     */
        public function delete(Request $request, Dataapprove $Dataapprove): Response
        {
            if ($this->isCsrfTokenValid('delete'.$Dataapprove->getId(), $request->request->get('_token'))) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($Dataapprove);
                $entityManager->flush();
            }

        return $this->redirectToRoute('dataapprove_type_index');
    }
}
