<?php

namespace App\Controller;

use App\Entity\UserInfo;
use App\Form\UserInfoType;
use App\Repository\FosUserRepository;
use App\Repository\UserInfoRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/profile")
 */
class UserInfoController extends AbstractController
{
    /**
     * @Route("/", name="user_info_index", methods={"GET"})
     */
    public function index(UserInfoRepository $userInfoRepository): Response
    {

        return $this->render('user_info/index.html.twig', [
            'user_infos' => $this->getUser(),
        ]);
    }

    /**
     * @Route("/view/{username}", name="profile", methods={"GET"})
     */
    public function profile(FosUserRepository $fosUserRepository,Request $request): Response
    {
       
     $user=$fosUserRepository->findOneBy(['username'=>$request->attributes->get('username')]);
        return $this->render('user_info/profile.html.twig', [
            'user' => $user,
        ]);
    }
     /**
     * @Route("/edit", name="user_info_index1")
     */
public function edit(Request $request)
{
    $userInfo=$this->getUser()->getUserInfo();
    if(!$userInfo){
        $userInfo=new UserInfo();
        $userInfo->setUser($this->getUser());
        $userInfo->setRegistrationDate(new DateTime());
    }
    $form = $this->createForm(UserInfoType::class,$userInfo);

    $form->handleRequest($request);
    if ($form->isSubmitted()  &&  $form->isValid()) {
        $uploadedFile = $form['image']->getData();
        if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/profile_pic';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $userInfo->setImage($newFilename);
        }
        $userInfo->setMiddleName($form["MiddleName"]->getData());
        $userInfo->setFirstName($form["FirstName"]->getData());
        $userInfo->setLastName($form["LastName"]->getData());
        $userInfo->setAffiliation($form["Affiliation"]->getData());
        $userInfo->setAddress($form["Address"]->getData());
        $userInfo->setSex($form["Sex"]->getData());
        
        $em= $this->getDoctrine()->getManager();
        $em->persist($userInfo);
        $em->flush();
        return $this->redirectToRoute('user_info_index');
    }
    return $this->render('user_info/edit.html.twig', [
        'user_info' => $this->getUser(),
        'form' => $form->createView(),
    ]);
}
    

    

   

}
