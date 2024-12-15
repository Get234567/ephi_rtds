<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\FundingSource;
use App\Form\FundingSourceType;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;

class StudySettingController extends AbstractController
{
    /**
     * @Route("/setting/study", name="study_setting")
     */
    public function index()
    {
        $show = $this->getDoctrine()
        ->getRepository(FundingSource::class)
        ->findAll();
       // if($id)$create = $this->getDoctrine()->getRepository(FundingSource::class)->find($id);
        //else
         $create = new FundingSource();
        $type='datasetformat';
        $form = $this->createForm(FundingSourceType::class, $create);
        
        $data=$this->renderView('setting/study.html.twig',[
            'form' => $form->createView(),
            'title'=>'Add Study',
            'types' => $show,
            'Type' => $type,
            'action'=>'new'
            ]);
        return $this->render('setting/index.html.twig', [
            'data' => $data,
        ]);
        
    }
}
