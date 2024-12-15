<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\StudyDesign;
use App\Form\StudyDesignType;
use App\Repository\StudyDesignRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/studydesign")
 */
class StudyDesignController extends AbstractController
{
    /**
     * @Route("/", name="study_design_index")
     */
    public function index(StudyDesignRepository $studyDesignRepository,Request $request,PaginatorInterface $paginator): Response
    {   

        $studyDesign = new StudyDesign();
        $form = $this->createForm(StudyDesignType::class, $studyDesign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyDesign);
            $entityManager->flush();

            return $this->redirectToRoute('study_design_index');
        }

        $search=$request->query->get('search');
        $queryBuilder = $studyDesignRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'link' =>'study_design',
            'name' => 'Study Design',
        ]);
    }

    /**
     * @Route("/new", name="study_design_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $studyDesign = new StudyDesign();
        $form = $this->createForm(StudyDesignType::class, $studyDesign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyDesign);
            $entityManager->flush();

            return $this->redirectToRoute('study_design_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'study_design' => $studyDesign,
            'form' => $form->createView(),
            
            'link' =>'study_design',
            'name' => 'Study Design',

        ]);
    }

    /**
     * @Route("/{id}", name="study_design_show", methods={"GET"})
     */
    public function show(StudyDesign $studyDesign): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $studyDesign,
            'link' =>'study_design',
            'name' => 'Study Design',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_design_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyDesign $studyDesign): Response
    {
        $form = $this->createForm(StudyDesignType::class, $studyDesign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_design_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $studyDesign,
            'form' => $form->createView(),
            'link' =>'study_design',
            'name' => 'Study Design',
        ]);
    }

    /**
     * @Route("/{id}", name="study_design_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyDesign $studyDesign): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyDesign->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyDesign);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_design_index');
    }
}
