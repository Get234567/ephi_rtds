<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Submission;
use App\Form\SubmissionType;
use App\Repository\SubmissionRepository;
use App\Services\EPHISecurity;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




/**
 * @Route("/submission")
 */
class SubmissionController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="submission_index", methods={"GET","POST"})
     */
    public function index(Request $request, SubmissionRepository $SubmissionRepository, PaginatorInterface $paginator): Response
    {

        $submission = new Submission();
        $form = $this->createForm(SubmissionType::class, $submission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($submission);
            $entityManager->flush();

            return $this->redirectToRoute('submission_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $SubmissionRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('submission/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'link' => 'submission',
            'name' => 'Submission',
        ]);
    }

    /**
     * @Route("/new", name="submission_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $submission = new Submission();
        $form = $this->createForm(SubmissionType::class, $submission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($submission);
            $entityManager->flush();

            return $this->redirectToRoute('submission_index');
        }

        return $this->render('submission/new.html.twig', [
            'Submission' => $submission,
            'form' => $form->createView(),
            'link' => 'submission',
            'name' => 'Submission',
        ]);
    }

    /**
     * @Route("/{id}", name="submission_show", methods={"GET"})
     */
    public function show(Submission $submission): Response
    {
        return $this->render('submission/show.html.twig', [
            'row' => $submission,
            'link' => 'submission',
            'name' => 'Submission',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="submission_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Submission $submission): Response
    {
        $form = $this->createForm(SubmissionType::class, $submission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('submission_index');
        }

        return $this->render('submission/edit.html.twig', [
            'row' => $submission,
            'form' => $form->createView(),
            'link' => 'submission',
            'name' => 'Submission',
        ]);
    }

    /**
     * @Route("/{id}", name="submission_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Submission $submission): Response
    {
        if ($this->isCsrfTokenValid('delete'.$submission->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($submission);
            $entityManager->flush();
        }

        return $this->redirectToRoute('submission_index');
    }
}
