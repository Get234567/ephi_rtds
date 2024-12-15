<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Site;
use App\Form\SiteType;
use App\Services\EPHISecurity;
class SiteController extends AbstractController

{

    private $security;

    public function __construct(EPHISecurity $sec)
    {
        $this->security = $sec;
    }

    /**
     * @Route("setting/site", name="site")
     */
    public function index(Request $request)
    {    
        $this->security->isAllowed($this->getUser(),"site_inf_updt");
        $create = $this->getDoctrine()
        ->getRepository(Site::class)->findAll();
      
        if(!$create){$create=new Site();
        //dd("not create");
        }
        else {
            $create=$create[0];
        }
        $form = $this->createForm(SiteType::class, $create);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
    
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($create);
            $entityManager->flush();
            $this->addFlash("success", "Sites configuration successfully updated!! ");
            return $this->redirectToRoute('site');
        }

       return $this->render('setting/site.html.twig',['form'=>$form->createView(),
        'button_label'=>'Update',
        ]);
        
    }
}
