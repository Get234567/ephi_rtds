<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\FundingSourceRepository;
use App\Entity\FundingSource;
use App\Form\FundingSourceType;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/funding/source")
 */
class FundingSourceController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="funding_source_index")
     */
    public function index(FundingSourceRepository $fundingSourceRepository,Request $request,PaginatorInterface $paginator): Response
    {
        
            $fundingSource = new FundingSource();
            $form = $this->createForm(FundingSourceType::class, $fundingSource);
            $form->handleRequest($request);
    
            if ($form->isSubmitted() && $form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($fundingSource);
                $entityManager->flush();
    
                return $this->redirectToRoute('funding_source_index');
            }
            $search=$request->query->get('search');
            $queryBuilder = $fundingSourceRepository->findData($search);
            $data = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );

        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Funding source',
            'link' => 'funding_source',
        ]);
    }

    /**
     * @Route("/new", name="funding_source_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $fundingSource = new FundingSource();
        $form = $this->createForm(FundingSourceType::class, $fundingSource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($fundingSource);
            $entityManager->flush();

            return $this->redirectToRoute('funding_source_index');
        }

        return $this->render('name_desc/new.html.twig', [
            'row' => $fundingSource,
            'form' => $form->createView(),
            'name' => 'Funding source',
            'link' => 'funding_source',
        ]);
    }

    /**
     * @Route("/{id}", name="funding_source_show", methods={"GET"})
     */
    public function show(FundingSource $fundingSource): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $fundingSource,
            'name' => 'Funding source',
            'link' => 'funding_source',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="funding_source_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FundingSource $fundingSource): Response
    {
        $form = $this->createForm(FundingSourceType::class, $fundingSource);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('funding_source_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $fundingSource,
            'form' => $form->createView(),
            'name' => 'Funding source',
            'link' => 'funding_source',
        ]);
    }

    /**
     * @Route("/{id}", name="funding_source_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FundingSource $fundingSource): Response
    {
        if ($this->isCsrfTokenValid('delete'.$fundingSource->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($fundingSource);
            $entityManager->flush();
        }

        return $this->redirectToRoute('funding_source_index');
    }
}
