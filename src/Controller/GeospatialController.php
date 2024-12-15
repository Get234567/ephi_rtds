<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Geospatial;
use App\Form\GeospatialType;
use App\Repository\DatasetRepository;
use App\Repository\GeospatialRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
/**
 * @Route("/geospatial")
 */
class GeospatialController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="geospatial_index")
     */
    public function index(GeospatialRepository $geospatialRepository,Request $request,PaginatorInterface $paginator): Response
    {

        $geospatial = new Geospatial();
        $form = $this->createForm(GeospatialType::class, $geospatial);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($geospatial);
            $entityManager->flush();
            return $this->redirectToRoute('geospatial_index');
        }
        $search=$request->query->get('search');
        $queryBuilder = $geospatialRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Geospatial',
            'link' => 'geospatial',
        ]);
    }

    /**
     * @Route("/new", name="geospatial_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $geospatial = new Geospatial();
        $form = $this->createForm(GeospatialType::class, $geospatial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($geospatial);
            $entityManager->flush();

            return $this->redirectToRoute('geospatial_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'row' => $geospatial,
            'form' => $form->createView(),
            'name' => 'Geospatial',
            'link' => 'geospatial',
        ]);
    }

    /**
     * @Route("/{id}", name="geospatial_show", methods={"GET"})
     */
    public function show(Geospatial $geospatial): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $geospatial,
            'name' => 'Geospatial',
            'link' => 'geospatial',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="geospatial_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Geospatial $geospatial): Response
    {
        $form = $this->createForm(GeospatialType::class, $geospatial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('geospatial_index');
        }
       
        return $this->render('name_desc/edit.html.twig', [
            'row' => $geospatial,
            'form' => $form->createView(),
            'name' => 'Geospatial',
            'link' => 'geospatial',
        ]);
    }

    /**
     * @Route("/{id}", name="geospatial_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Geospatial $geospatial,DatasetRepository $datasetRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$geospatial->getId(), $request->request->get('_token'))) {
            if ($datasetRepository->findOneBy(['geospatial'=> $geospatial])) {
                $this->addFlash('warning','You cannot delete this item, it is being used by dataset !!!');
                return $this->redirectToRoute('geospatial_index');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($geospatial);
            $entityManager->flush();
        }

        return $this->redirectToRoute('geospatial_index');
    }
}
