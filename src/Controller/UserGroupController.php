<?php

namespace App\Controller;

use App\Entity\FosUser;
use App\Entity\UserGroup;
use App\Entity\UserPermission;
use App\Form\UserGroupType;
use App\Repository\FosUserRepository;
use App\Repository\UserGroupRepository;
use App\Repository\UserPermissionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\EPHISecurity;
use DateTime;

/**
 * @Route("/usergroup")
 */
class UserGroupController extends AbstractController
{


    private $security;

    public function __construct(EPHISecurity $sec)
    {
        $this->security = $sec;
    }

    /**
     * @Route("/", name="user_group_index", methods={"GET"})
     */
    public function index(UserGroupRepository $userGroupRepository): Response
    {

        $this->security->isAllowed($this->getUser(),"usr_grp_show_indx");

        return $this->render('user_group/index.html.twig', [
            'user_groups' => $userGroupRepository->findAll(),
        ]);
    }


    /**
     * @Route("/show_permission", name="show_user_group_permission", methods={"GET"})
     */
    public function showGroupPermission( Request $request,UserPermissionRepository $userPermissionRepository,UserGroupRepository $userGroupRepository,FosUserRepository $fosUserRepository): Response
    {


        return $this->render('user_group/abd.html.twig', [
            'user_groups' => $userGroupRepository->findAll(),
            'user_permissions' =>   $userPermissionRepository->findAll(),
            'users' => $fosUserRepository->findAll(),
        ]);
        
    }


     /**
     * @Route("/update_permission", name="update_user_group_permission", methods={"POST"})
     */
    public function updateGroupPermission(Request $request): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_grp_edit");
        $entityManager = $this->getDoctrine()->getManager();
        $permission=$entityManager->getRepository(UserPermission::class);
        $usergroupR=$entityManager->getRepository(UserGroup::class);
        $userR=$entityManager->getRepository(FosUser::class);
        $data = $request->request->get('box2');
        $users = $request->request->get('box4');
        $group = $request->request->get('group');

        $usergroup=$usergroupR->findOneBy(['id'=>$group]);
        $usergroup->setUpdatedAt(new DateTime());
        $usergroup->removeAll();
        $entityManager->flush();
        if($data!=null)
        {
            foreach ($data as $key => $value) {
                $perm=$permission->findOneBy(['id'=>$value]);
                $usergroup->getPermission()->add($perm);
            }
        }
       
        if($users!=null)
        {
            foreach ($users as $key => $value) {
                $user=$userR->findOneBy(['id'=> $value]);
                $user->setUserGroup($usergroup);
             }
        }
        
      

        $entityManager->flush();

        //$nn=$request->request->get('box2', 'default');
       // $arr=$this->get('request')->request->all();

        return $this->redirectToRoute('show_user_group_permission');
        
    }


    /**
     * @Route("/new", name="user_group_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_grp_new");

        $userGroup = new UserGroup();
        $form = $this->createForm(UserGroupType::class, $userGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $userGroup->setCreatedAt(new DateTime());
            $userGroup->setUpdatedAt(new DateTime());
            $entityManager->persist($userGroup);
            $entityManager->flush();

            return $this->redirectToRoute('user_group_index');
        }

        return $this->render('user_group/new.html.twig', [
            'user_group' => $userGroup,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="user_group_show", methods={"GET"})
     */
    public function show(UserGroup $userGroup): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_grp_show_indx");

        return $this->render('user_group/show.html.twig', [
            'user_group' => $userGroup,
        ]);
    } 

    /**
     * @Route("/{id}/edit", name="user_group_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UserGroup $userGroup,UserPermissionRepository $userPermissionRepository,UserGroupRepository $userGroupRepository,FosUserRepository $fosUserRepository): Response
    {

        /*$form = $this->createForm(UserGroupType::class, $userGroup);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_group_index');
        }*/

      //  $this->security->isAllowed($this->getUser(),"usr_grp_edit");
      $this->security->isAllowed($this->getUser(),"usr_grp_edit");


        if($request->query->get('search')){
            $var=$fosUserRepository->findSearch($request->query->get('search'));
            $arr=[];
            foreach ($var as $key => $value) {
                $temp["id"]=$value->getId();
                if($value->getUserInfo() != null)
                $temp["name"]=$value->getUserInfo()->getName();
                else 
                $temp["name"]=$value->getUsername();
                $arr[]=$temp;
            }
            return new Response(json_encode($arr));
        } 
        if($request->query->get('searchpermission')){
            if($request->query->get('searchpermission')=='!$')$var=$userPermissionRepository->findAll();
           else $var=$userPermissionRepository->findSearch($request->query->get('searchpermission'));
            $arr=[];
            foreach ($var as $key => $value) {

                $temp["id"]=$value->getId();
                $temp["name"]=$value->getDescription();
                $arr[]=$temp;
            }
            return new Response(json_encode($arr));
        } 

        if($request->request->get('box2') || $request->request->get('box4')){
            
        $entityManager = $this->getDoctrine()->getManager();
        $permission=$entityManager->getRepository(UserPermission::class);
        $userR=$entityManager->getRepository(FosUser::class);
        
        $data = $request->request->get('box2');
        $users = $request->request->get('box4');
      
        $userGroup->removeAll();
        $userGroup->setName($request->request->get('grpname'));
        $userGroup->setUpdatedAt(new DateTime('now'));
        $entityManager->flush();
        if($data!=null)
        {

            foreach ($data as $key => $value) {
                $perm=$permission->findOneBy(['id'=>$value]);
                if($perm){
                    if(!$userGroup->getPermission()->contains($perm))
                        $userGroup->getPermission()->add($perm);
                }
                try {
                   
                $entityManager->flush();
                } catch (\Throwable $th) {
                    //throw $th;
                }
            }
        }
        
       
        if($users!=null)
        {
            foreach ($users as $key => $value) {
                $user=$userR->findOneBy(['id'=> $value]);
                $user->setUserGroup($userGroup);
             }
        }
        
      
        
        $entityManager->flush();
        return $this->redirectToRoute('user_group_edit',['id'=> $userGroup->getId()]);
    }


        return $this->render('user_group/abd.html.twig', [
            'user_group' => $userGroup,
            'group_permission'=> $userGroup->getPermission(),
            'user_groups' => $userGroupRepository->findAll(),
            'user_permissions' =>   $userPermissionRepository->findAll(),
            'group_users' =>   $fosUserRepository->findBy(['userGroup'=> $userGroup]),
            
        ]);
    }

    /**
     * @Route("/{id}", name="user_group_delete", methods={"DELETE"})
     */
    public function delete(Request $request, UserGroup $userGroup): Response
    {
        $this->security->isAllowed($this->getUser(),"usr_grp_del");

        if ($this->isCsrfTokenValid('delete'.$userGroup->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($userGroup);
            $entityManager->flush();
        }

        return $this->redirectToRoute('user_group_index');
    }
}
