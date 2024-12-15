<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\WorkUnit;
use App\Form\WorkUnitType;
use App\Repository\WorkUnitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/workunit")
 */
class WorkUnitController extends AbstractController
{
    /**
     * @Route("/", name="work_unit_index")
     */
    public function index(WorkUnitRepository $workUnitRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $workUnit = new WorkUnit();
        $form = $this->createForm(WorkUnitType::class, $workUnit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($workUnit);
            $entityManager->flush();

            return $this->redirectToRoute('work_unit_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $workUnitRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'link' => 'work_unit',
            'name' => 'work unit',
            
        ]);
    }

    /**
     * @Route("/new", name="work_unit_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $workUnit = new WorkUnit();
        $form = $this->createForm(WorkUnitType::class, $workUnit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
         
            $entityManager = $this->getDoctrine()->getManager();
           
            $entityManager->persist($workUnit);
            $entityManager->flush();

            return $this->redirectToRoute('work_unit_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'row' => $workUnit,
            'form' => $form->createView(),
            'link' => 'work_unit',
            'name' => 'work unit',
        ]);
    }

    /**
     * @Route("/{id}", name="work_unit_show", methods={"GET"})
     */
    public function show(WorkUnit $workUnit): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $workUnit,
            'link' => 'work_unit',
            'name' => 'work unit',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="work_unit_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, WorkUnit $workUnit): Response
    {
        $form = $this->createForm(WorkUnitType::class, $workUnit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('work_unit_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $workUnit,
            'form' => $form->createView(),
            'link' => 'work_unit',
            'name' => 'work unit',
        ]);
    }

    /**
     * @Route("/{id}", name="work_unit_delete", methods={"DELETE"})
     */
    public function delete(Request $request, WorkUnit $workUnit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$workUnit->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($workUnit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('work_unit_index');
    }
}
