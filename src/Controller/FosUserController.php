<?php

namespace App\Controller;

use App\Entity\FosUser;
use App\Entity\UserInfo;
use App\Form\FosUser1Type;
use App\Form\FosUser1TypeEdit;
use App\Repository\FosUserRepository;
use App\Repository\SignupRequestRepository;
use App\Services\EPHISecurity;
use DateTime;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/user")
 */
class FosUserController extends AbstractController

{

    private $security;
    public function __construct( UserManagerInterface $userManager,EPHISecurity $ePHISecurity)
    {
    
        $this->userManager = $userManager;
        $this->security=$ePHISecurity;

    }



    /**
     * @Route("/", name="fos_user_index", methods={"GET"})
     */
    public function index(PaginatorInterface $paginator,Request $request,FosUserRepository $fosUserRepository): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_list_show");
        $a=$fosUserRepository->findSearch("a");
     
        $fosUsers = $fosUserRepository->findA($request->query->get('search'));
            $foss = $paginator->paginate(
           $fosUsers, /* query NOT result */
           $request->query->getInt('page', 1)/*page number*/,
           10/*limit per page*/
       );
        return $this->render('fos_user/index.html.twig', [
            'fos_users' => $foss,
        ]);
    }

    /**
     * @Route("/new", name="fos_user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_new");
        $fosUser = new FosUser();
        $fosUser->setEnabled(false);
        $form = $this->createForm(FosUser1Type::class, $fosUser);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $userInfo=new UserInfo();
            $userInfo->setRegistrationDate(new DateTime());
            $userInfo->setUser($fosUser);  
            $userInfo->setAddress($fosUser->getaddress());
            $userInfo->setAffiliation($fosUser->getAffiliation());
            $userInfo->setFirstName($fosUser->getFirstName());
            $userInfo->setMiddleName($fosUser->getMiddleName());
            $userInfo->setLastName($fosUser->getLastName());
            $userInfo->setPhone($fosUser->getPhone());
            $userInfo->setSex($fosUser->getSex()); 
            $entityManager = $this->getDoctrine()->getManager();

            $this->userManager->updateUser($fosUser);
            $entityManager->persist($userInfo);
            $entityManager->flush();
            $this->addFlash('success',"User added successfully.");
            return $this->redirectToRoute('fos_user_index');
        }

        return $this->render('fos_user/new.html.twig', [
            'fos_user' => $fosUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fos_user_show", methods={"GET"})
     */
    public function show(FosUser $fosUser): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_show_dtl");
        return $this->render('fos_user/show.html.twig', [
            'fos_user' => $fosUser,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="fos_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, FosUser $fosUser,FosUserRepository $fosUserRepository): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_edit");

        if($fosUser->hasRole("ROLE_ADMIN")){
            if($this->getUser() != $fosUser){
            $this->addFlash("danger","Only ADMIN can edit this User");
            return $this->redirectToRoute('fos_user_index'); 
        }
        }
        $userInfo=$fosUser->getUserInfo();
        if($userInfo){
        $fosUser->setAffiliation($userInfo->getAffiliation());
        $fosUser->setFirstName($userInfo->getFirstName());
        $fosUser->setMiddleName($userInfo->getMiddleName());
        $fosUser->setLastName($userInfo->getLastName());
        $fosUser->setaddress($userInfo->getAddress());
        $fosUser->setPhone($userInfo->getPhone());}
        $form = $this->createForm(FosUser1TypeEdit::class, $fosUser);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $userInfo=$fosUser->getUserInfo();
            if(!$userInfo){
            $userInfo=new UserInfo();
            $userInfo->setRegistrationDate(new DateTime());
            $userInfo->setUser($fosUser);   
        }
        if($fosUserRepository->findOneBy(['username'=> $fosUser->getUsername()])){
            if($fosUserRepository->findOneBy(['username'=> $fosUser->getUsername()]) != $fosUser){
                $this->addFlash('warning',"Username already used.");
                return $this->render('fos_user/edit.html.twig', [
                    'fos_user' => $fosUser,
                    'form' => $form->createView(),
                ]);   
            }
        }
        if($fosUserRepository->findOneBy(['email'=> $fosUser->getEmail()])) {
            if($fosUserRepository->findOneBy(['email'=> $fosUser->getEmail()])!= $fosUser){
                $this->addFlash('warning',"Email already used.");
                return $this->render('fos_user/edit.html.twig', [
                    'fos_user' => $fosUser,
                    'form' => $form->createView(),
                ]);
            }
        }
            $userInfo->setAddress($fosUser->getaddress());
            $userInfo->setAffiliation($fosUser->getAffiliation());
            $userInfo->setFirstName($fosUser->getFirstName());
            $userInfo->setMiddleName($fosUser->getMiddleName());
            $userInfo->setLastName($fosUser->getLastName());
            $userInfo->setPhone($fosUser->getPhone());
            $userInfo->setSex($fosUser->getSex());
            $this->userManager->updateUser($fosUser);
            $this->getDoctrine()->getManager()->persist($userInfo);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success',"User information updated successfully.");
            return $this->redirectToRoute('fos_user_index');
        } 
        return $this->render('fos_user/edit.html.twig', [
            'fos_user' => $fosUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="fos_user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, FosUser $fosUser,SignupRequestRepository $signupRequestRepository): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_del");
        if($this->getUser() == $fosUser){
            $this->addFlash("danger","Unable to detete currently logged in a user.");
            return $this->redirectToRoute('fos_user_index');   
        }
        if($fosUser->hasRole("ROLE_ADMIN")){
            $this->addFlash("danger","Unable to detete user with ADMIN privilege");
            return $this->redirectToRoute('fos_user_index'); 
        }
        if ($this->isCsrfTokenValid('delete'.$fosUser->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $r=$signupRequestRepository->findOneBy(["user"=>$fosUser]);
            if($r){
            $entityManager->remove($r);
            $entityManager->flush();}
            $u=$fosUser->getUserInfo();
            if($u){
            $entityManager->remove($u);
            $entityManager->flush();}
            $entityManager->remove($fosUser);
            $entityManager->flush();
            $this->addFlash("success","User deleted successfully !");
        }

        return $this->redirectToRoute('fos_user_index');
    }
}
