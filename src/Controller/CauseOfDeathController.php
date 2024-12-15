<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\CauseOfDeath;
use App\Form\CauseOfDeathType;
use App\Repository\CauseOfDeathRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/causeofdeath")
 */
class CauseOfDeathController extends AbstractController
{ 
    /**
     * @Route("/", name="cause_of_death_index")
     */
    public function index(CauseOfDeathRepository $causeOfDeathRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $causeOfDeath = new CauseOfDeath();
        $form = $this->createForm(CauseOfDeathType::class, $causeOfDeath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($causeOfDeath);
            $entityManager->flush();

            return $this->redirectToRoute('cause_of_death_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $causeOfDeathRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'cause of death',
            'link' => 'cause_of_death',
        ]);
    }

    /**
     * @Route("/new", name="cause_of_death_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $causeOfDeath = new CauseOfDeath();
        $form = $this->createForm(CauseOfDeathType::class, $causeOfDeath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($causeOfDeath);
            $entityManager->flush();

            return $this->redirectToRoute('cause_of_death_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'cause_of_death' => $causeOfDeath,
            'form' => $form->createView(),
            'name' => 'cause of death',
            'link' => 'cause_of_death',
        ]);
    }

    /**
     * @Route("/{id}", name="cause_of_death_show", methods={"GET"})
     */
    public function show(CauseOfDeath $causeOfDeath): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $causeOfDeath,
            'name' => 'cause of death',
            'link' => 'cause_of_death',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cause_of_death_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CauseOfDeath $causeOfDeath): Response
    {
        $form = $this->createForm(CauseOfDeathType::class, $causeOfDeath);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cause_of_death_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $causeOfDeath,
            'form' => $form->createView(),
            'name' => 'cause of death',
            'link' => 'cause_of_death',
        ]);
    }

    /**
     * @Route("/{id}", name="cause_of_death_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CauseOfDeath $causeOfDeath): Response
    {
        if ($this->isCsrfTokenValid('delete'.$causeOfDeath->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($causeOfDeath);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cause_of_death_index');
    }
}
