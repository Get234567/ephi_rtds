<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Milestone;
use App\Form\MilestoneType;
use App\Repository\MilestoneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/milestone") 
 */
class MilestoneController extends AbstractController
{
    /**
     * @Route("/", name="milestone_index")
     */
    public function index(MilestoneRepository $milestoneRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $milestone = new Milestone();
        $form = $this->createForm(MilestoneType::class, $milestone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($milestone);
            $entityManager->flush();
            $this->addFlash('success',"Milestone Added Successfully");
            return $this->redirectToRoute('milestone_index');
        }

        $search=$request->query->get('search');
        $queryBuilder = $milestoneRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'milestone',
            'link' => 'milestone'
        ]);

        return $this->render('milestone/index.html.twig', [
            'milestones' => $milestoneRepository->findAll(),
        ]);
    }

    

    /**
     * @Route("/{id}", name="milestone_show", methods={"GET"})
     */
    public function show(Milestone $milestone): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $milestone,
            'name' => 'milestone',
            'link' => 'milestone',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="milestone_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Milestone $milestone): Response
    {
        $form = $this->createForm(MilestoneType::class, $milestone);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success',"Milestone Edited Successfully");
            return $this->redirectToRoute('milestone_index');
        }
        return $this->render('name_desc/edit.html.twig', [
            'data' => $milestone,
            'form' => $form->createView(),
            'name' => 'milestone',
            'link' => 'milestone',
        ]);
        return $this->render('milestone/edit.html.twig', [
            'milestone' => $milestone,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="milestone_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Milestone $milestone): Response
    {
        if ($this->isCsrfTokenValid('delete'.$milestone->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($milestone);
            $entityManager->flush();
        }

        return $this->redirectToRoute('milestone_index');
    }
}
