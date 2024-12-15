<?php

namespace App\Controller;

use App\Entity\Config;
use App\Entity\UserGroup;
use App\Repository\ConfigRepository;
use App\Services\EPHISecurity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

class ConfigController extends AbstractController
{
    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/config", name="config")
     */
    public function index(Request $request,ConfigRepository $configRepository,KernelInterface $kernel)
    {
        $config=$configRepository->findAll();
        if(!$config){
            $config=new Config();
        }
        else $config=$config[0];
        $form=$this->createFormBuilder()->add('DefaultUserGroup',EntityType::class,['class'=> UserGroup::class,'data'=>$config->getDefaultGroup()])
        ->add('UserCanRegister',CheckboxType::class,['required'=> false,'data'=> $config->getUserCanRegister()])
        ->add('Submit',SubmitType::class,['label'=>' Save','attr'=>['class'=>'btn btn-success btn-lg fa fa-save']])
        ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          $config->setDefaultGroup($form['DefaultUserGroup']->getData());
          $config->setUserCanRegister($form['UserCanRegister']->getData());
          $entityManager = $this->getDoctrine()->getManager();


          $entityManager->persist($config);
          $entityManager->flush();
        }
        return $this->render('config/index.html.twig', [
            'controller_name' => 'ConfigController',
            'form'=>$form->createView(),
        ]);
    }
}
