<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\InvolvementType;
use App\Form\InvolvementTypeType;
use App\Repository\InvolvementTypeRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/involvement/type")
 */
class InvolvementTypeController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="involvement_type_index")
     */
    public function index(InvolvementTypeRepository $involvementTypeRepository,Request $request,PaginatorInterface $paginator): Response
    {

        $involvementType = new InvolvementType();
        $form = $this->createForm(InvolvementTypeType::class, $involvementType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($involvementType);
            $entityManager->flush();

            return $this->redirectToRoute('involvement_type_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $involvementTypeRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'link' => 'involvement_type',
            'name' => 'Involvement type',


        ]);
    }

    /**
     * @Route("/new", name="involvement_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $involvementType = new InvolvementType();
        $form = $this->createForm(InvolvementTypeType::class, $involvementType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($involvementType);
            $entityManager->flush();
            $this->addFlash('success',"Involvement Type Added Successfully");
            return $this->redirectToRoute('involvement_type_index');
        }

        return $this->render('involvement_type/new.html.twig', [
            'involvement_type' => $involvementType,
            'form' => $form->createView(),

            'link' => 'involvement_type',
            'name' => 'Involvement type',
            
        ]);
    }

    /**
     * @Route("/{id}", name="involvement_type_show", methods={"GET"})
     */
    public function show(InvolvementType $involvementType): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $involvementType,

            'link' => 'involvement_type',
            'name' => 'Involvement type',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="involvement_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, InvolvementType $involvementType): Response
    {
        $form = $this->createForm(InvolvementTypeType::class, $involvementType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success',"Inovlvement TYpe Edited Successfully");
            return $this->redirectToRoute('involvement_type_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $involvementType,
            'form' => $form->createView(),

            'link' => 'involvement_type',
            'name' => 'Involvement type',
        ]);
    }

    /**
     * @Route("/{id}", name="involvement_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, InvolvementType $involvementType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$involvementType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($involvementType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('involvement_type_index');
    }
}
