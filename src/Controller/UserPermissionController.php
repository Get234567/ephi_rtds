<?php

namespace App\Controller;

use App\Entity\UserPermission;
use App\Form\UserPermissionType;
use App\Repository\UserPermissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/userpermission")
 */
class UserPermissionController extends AbstractController
{
    /**
     * @Route("/", name="user_permission_index", methods={"GET"})
     */
    public function index(UserPermissionRepository $userPermissionRepository): Response
    {
        return $this->render('user_permission/index.html.twig', [
            'user_permissions' => $userPermissionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="user_permission_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $userPermission = new UserPermission();
        $form = $this->createForm(UserPermissionType::class, $userPermission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($userPermission);
            $entityManager->flush();

            return $this->redirectToRoute('user_permission_index');
        }

        return $this->render('user_permission/new.html.twig', [
            'user_permission' => $userPermission,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_permission_show", methods={"GET"})
     */
    public function show(UserPermission $userPermission): Response
    {
        return $this->render('user_permission/show.html.twig', [
            'user_permission' => $userPermission,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="user_permission_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UserPermission $userPermission): Response
    {
        $form = $this->createForm(UserPermissionType::class, $userPermission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_permission_index');
        }

        return $this->render('user_permission/edit.html.twig', [
            'user_permission' => $userPermission,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_permission_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UserPermission $userPermission): Response
    {
        if ($this->isCsrfTokenValid('delete'.$userPermission->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($userPermission);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_permission_index');
    }
}
