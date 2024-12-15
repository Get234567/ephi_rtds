<?php

namespace App\Controller;

use App\Entity\Currency;
use App\Form\CurrencyType;
use App\Repository\CurrencyRepository;
use App\Repository\StudyRepository;
use App\Services\EPHISecurity;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/currency")
 */
class CurrencyController extends AbstractController
{
    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }
    /**
     * @Route("/", name="currency_index")
     */
    public function index(CurrencyRepository $currencyRepository,Request $request,PaginatorInterface $paginator): Response
    {

        $currency = new Currency();
        $form = $this->createForm(CurrencyType::class, $currency);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($currency);
            $entityManager->flush();

            return $this->redirectToRoute('currency_index');
        }

        $search=$request->query->get('search');
        $queryBuilder = $currencyRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'form' => $form->createView(),
            'name' => 'Currency',
            'link' => 'currency',
        ]);
    }

    /**
     * @Route("/new", name="currency_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $currency = new Currency();
        $form = $this->createForm(CurrencyType::class, $currency);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($currency);
            $entityManager->flush();

            return $this->redirectToRoute('currency_index');
        }

        return $this->render('currency/new.html.twig', [
            'currency' => $currency,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="currency_show", methods={"GET"})
     */
    public function show(Currency $currency): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $currency,
            'name' => 'Currency',
            'link' => 'currency',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="currency_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Currency $currency): Response
    {
        $form = $this->createForm(CurrencyType::class, $currency);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('currency_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $currency,
            'form' => $form->createView(),
            'name' => 'Currency',
            'link' => 'currency',
        ]);
    }

    /**
     * @Route("/{id}", name="currency_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Currency $currency,StudyRepository $studyRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$currency->getId(), $request->request->get('_token'))) {
            if($studyRepository->findOneBy(['cur'=>$currency])){
                $this->addFlash('warning','You cannot delete this item, it is being used by study !!!');
                return $this->redirectToRoute('currency_index');
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($currency);
            $entityManager->flush();
        }

        return $this->redirectToRoute('currency_index');
    }
}
