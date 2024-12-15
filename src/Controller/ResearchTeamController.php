<?php

namespace App\Controller;

use App\Entity\ResearchTeam;
use App\Form\ResearchTeamType;
use App\Repository\ResearchTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/research/team")
 */
class ResearchTeamController extends AbstractController
{
    /**
     * @Route("/", name="research_team_index")
     */
    public function index(ResearchTeamRepository $researchTeamRepository,Request $request): Response
    {
        $researchTeam = new ResearchTeam();
        $form = $this->createForm(ResearchTeamType::class, $researchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($researchTeam);
            $entityManager->flush();

            return $this->redirectToRoute('research_team_index');
        }
        return $this->render('name_desc/index.html.twig', [
            'data' => $researchTeamRepository->findAll(),
            'form' => $form->createView(),
            'link' => 'research_team',
            'name' => 'research Team',
        ]);
    }

    /**
     * @Route("/new", name="research_team_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $researchTeam = new ResearchTeam();
        $form = $this->createForm(ResearchTeamType::class, $researchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($researchTeam);
            $entityManager->flush();

            return $this->redirectToRoute('research_team_index');
        }

        return $this->render('research_team/new.html.twig', [
            'research_team' => $researchTeam,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="research_team_show", methods={"GET"})
     */
    public function show(ResearchTeam $researchTeam): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $researchTeam,
            'link' => 'research_team',
            'name' => 'research Team',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="research_team_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ResearchTeam $researchTeam): Response
    {
        $form = $this->createForm(ResearchTeamType::class, $researchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('research_team_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $researchTeam,
            'form' => $form->createView(),
            'link' => 'research_team',
            'name' => 'research Team',
        ]);
    }

    /**
     * @Route("/{id}", name="research_team_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ResearchTeam $researchTeam): Response
    {
        if ($this->isCsrfTokenValid('delete'.$researchTeam->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($researchTeam);
            $entityManager->flush();
        }

        return $this->redirectToRoute('research_team_index');
    }
}
