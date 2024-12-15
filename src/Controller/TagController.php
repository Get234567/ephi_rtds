<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Tag;
use App\Form\Tag1Type;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tag")
 */
class TagController extends AbstractController
{
    /**
     * @Route("/", name="tag_index", methods={"GET","POST"})
     */
    public function index(TagRepository $tagRepository,Request $request,PaginatorInterface $paginator): Response
    {

        $tag = new Tag();
        $form = $this->createForm(Tag1Type::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($tag);
            $entityManager->flush();

            return $this->redirectToRoute('tag_index');
       

        }
        $search=$request->query->get('search');
        $queryBuilder = $tagRepository->findData($search);
        $data = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render('name_desc/index.html.twig', [
            'data' => $data,
            'name' => 'Tag',
            'link' => 'tag',
            'form' => $form->createView(),
        ]);
    }

    
    /**
     * @Route("/{id}", name="tag_show", methods={"GET"})
     */
    public function show(Tag $tag): Response
    {
        return $this->render('name_desc/show.html.twig', [
            'row' => $tag,
            'name'=>'Tag',
            'link'=>'tag',
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tag_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Tag $tag): Response
    {
        $form = $this->createForm(Tag1Type::class, $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag_index');
        }

        return $this->render('name_desc/edit.html.twig', [
            'row' => $tag,
            'form' => $form->createView(),
            'name'=>'Tag',
            'link'=>'tag',
        ]);
    }

    /**
     * @Route("/{id}", name="tag_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Tag $tag): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tag->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($tag);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tag_index');
    }
}
