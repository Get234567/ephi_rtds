<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\DemographicGroup;
use App\Form\DemographicGroupType;
use App\Repository\DatasetRepository;
use App\Repository\DemographicGroupRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/demographic/group")
 */
class DemographicGroupController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="demographic_group_index")
     */
    public function index(DemographicGroupRepository $demographicGroupRepository,Request $request,PaginatorInterface $paginator): Response
    {
       
        $demographicGroup = new DemographicGroup();
        $form = $this->createForm(DemographicGroupType::class, $demographicGroup);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demographicGroup);
            $entityManager->flush();
            $this->addFlash('success',"Demographic Group Added Successfully");
            return $this->redirectToRoute('demographic_group_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $demographicGroupRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Demographic',
            'link' => 'demographic_group',
        ]);
    }

    /**
     * @Route("/new", name="demographic_group_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $demographicGroup = new DemographicGroup();
        $form = $this->createForm(DemographicGroupType::class, $demographicGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($demographicGroup);
            $entityManager->flush();
            $this->addFlash('success',"Demographic Group Edited Successfully");
            return $this->redirectToRoute('demographic_group_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'demographic_group' => $demographicGroup,
            'form' => $form->createView(),

            'name' => 'Demographic',
            'link' => 'demographic_group',
        ]);
    }

    /**
     * @Route("/{id}", name="demographic_group_show", methods={"GET"})
     */
    public function show(DemographicGroup $demographicGroup): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $demographicGroup,

            'name' => 'Demographic',
            'link' => 'demographic_group',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="demographic_group_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DemographicGroup $demographicGroup): Response
    {
        $form = $this->createForm(DemographicGroupType::class, $demographicGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demographic_group_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $demographicGroup,
            'form' => $form->createView(),

            'name' => 'Demographic',
            'link' => 'demographic_group',
        ]);
    }

    /**
     * @Route("/{id}", name="demographic_group_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DemographicGroup $demographicGroup,DatasetRepository $datasetRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$demographicGroup->getId(), $request->request->get('_token'))) {
            if ($datasetRepository->findOneBy(['geospatial'=> $demographicGroup])) {
                $this->addFlash('warning','You cannot delete this item, it is being used by dataset !!!');
                return $this->redirectToRoute('geospatial_index');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($demographicGroup);
            $entityManager->flush();
            $this->addFlash('success',"Demographic Group Deleted Successfully");
        }

        return $this->redirectToRoute('demographic_group_index');
    }
}
