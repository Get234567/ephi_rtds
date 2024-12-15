<?php

namespace App\Controller;

use App\Entity\StudyResearchTeam;
use App\Form\StudyResearchTeamType;
use App\Repository\StudyResearchTeamRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/studyresearch/team")
 */
class StudyResearchTeamController extends AbstractController
{
    /**
     * @Route("/", name="study_research_team_index", methods={"GET"})
     */
    public function index(StudyResearchTeamRepository $studyResearchTeamRepository): Response
    {
        return $this->render('study_research_team/index.html.twig', [
            'study_research_teams' => $studyResearchTeamRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="study_research_team_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studyResearchTeam = new StudyResearchTeam();
        $form = $this->createForm(StudyResearchTeamType::class, $studyResearchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyResearchTeam);
            $entityManager->flush();

            return $this->redirectToRoute('study_research_team_index');
        }

        return $this->render('study_research_team/new.html.twig', [
            'study_research_team' => $studyResearchTeam,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_research_team_show", methods={"GET"})
     */
    public function show(StudyResearchTeam $studyResearchTeam): Response
    {
        return $this->render('study_research_team/show.html.twig', [
            'study_research_team' => $studyResearchTeam,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_research_team_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyResearchTeam $studyResearchTeam): Response
    {
        $form = $this->createForm(StudyResearchTeamType::class, $studyResearchTeam);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_research_team_index');
        }

        return $this->render('study_research_team/edit.html.twig', [
            'study_research_team' => $studyResearchTeam,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="study_research_team_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyResearchTeam $studyResearchTeam): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyResearchTeam->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyResearchTeam);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_research_team_index');
    }
}
