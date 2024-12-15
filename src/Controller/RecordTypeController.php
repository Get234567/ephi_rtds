<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\RecordType;
use App\Form\RecordTypeType;
use App\Repository\RecordTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/record/type")
 */
class RecordTypeController extends AbstractController
{
    /**
     * @Route("/", name="record_type_index")
     */
    public function index(RecordTypeRepository $recordTypeRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $recordType = new RecordType();
        $form = $this->createForm(RecordTypeType::class, $recordType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($recordType);
            $entityManager->flush();

            return $this->redirectToRoute('record_type_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $recordTypeRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Record type',
            'link' => 'record_type',
        ]);
    }

    /**
     * @Route("/new", name="record_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $recordType = new RecordType();
        $form = $this->createForm(RecordTypeType::class, $recordType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($recordType);
            $entityManager->flush();

            return $this->redirectToRoute('record_type_index');
        }
        return $this->render('name_desc/new.html.twig', [
            'row' => $recordType,
            'form' => $form->createView(),
            'name' => 'Record type',
            'link' => 'record_type',
        ]);
    }

    /**
     * @Route("/{id}", name="record_type_show", methods={"GET"})
     */
    public function show(RecordType $recordType): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $recordType,
            'name' => 'Record type',
            'link' => 'record_type',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="record_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, RecordType $recordType): Response
    {
        $form = $this->createForm(RecordTypeType::class, $recordType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('record_type_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $recordType,
            'form' => $form->createView(),
            'name' => 'Record type',
            'link' => 'record_type',
        ]);
    }

    /**
     * @Route("/{id}", name="record_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, RecordType $recordType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$recordType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($recordType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('record_type_index');
    }
}
