<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\StudyType;
use App\Form\StudyTypeType;
use App\Repository\StudyTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/studytype")
 */
class StudyTypeController extends AbstractController
{
    /**
     * @Route("/", name="study_type_index")
     */
    public function index(StudyTypeRepository $studyTypeRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $studyType = new StudyType();
        $form = $this->createForm(StudyTypeType::class, $studyType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyType);
            $entityManager->flush();

            return $this->redirectToRoute('study_type_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $studyTypeRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'study type',
            'link' => 'study_type',
        ]);
    }

    /**
     * @Route("/new", name="study_type_new")
     */
    public function new(Request $request): Response
    {
        $studyType = new StudyType();
        $form = $this->createForm(StudyTypeType::class, $studyType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($studyType);
            $entityManager->flush();

            return $this->redirectToRoute('study_type_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'row' => $studyType,
            'form' => $form->createView(),
            'name' => 'study type',
            'link' => 'study_type',
        ]);
    }

    /**
     * @Route("/{id}", name="study_type_show", methods={"GET"})
     */
    public function show(StudyType $studyType): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $studyType,
            'name' => 'study type',
            'link' => 'study_type',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="study_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, StudyType $studyType): Response
    {
        $form = $this->createForm(StudyTypeType::class, $studyType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('study_type_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $studyType,
            'form' => $form->createView(),
            'name' => 'study type',
            'link' => 'study_type',
        ]);
    }

    /**
     * @Route("/{id}", name="study_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, StudyType $studyType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$studyType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($studyType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_type_index');
    }
}
