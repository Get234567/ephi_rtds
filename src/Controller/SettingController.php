<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use App\Entity\DataType;
use App\Form\DataTypeFormType;
use App\Entity\RecordType;
use App\Form\RecordTypeForm;
use App\Entity\Geospatial;
use App\Form\GeospatialType;
class SettingController extends AbstractController
{
    /**
     * @Route("/setting", name="setting")
     */
    public function index(Request $request)
    {
        $req=$request->query->get('set');
        if($req=="dataset")
            $data=$this->renderView('setting/dataset.html.twig');   
        return $this->render('setting/index.html.twig', [
            'data' => $data,
        ]);
    }

    /**
     * @Route("/setting/dataset", name="dataset_async")
     */
    public function getDataset(Request $request)
    {
        $set='';
        if($request->query->get('set')){
         $set=$request->query->get('set');
         return $this->setting($set,$request,null); 
        }
        elseif($request->query->get('action'))
            $this->delete($request->query->get('type'),$request->query->get('id'),$request);
        elseif($request->query->get('id')){
            return $this->setting($request->query->get('type'),$request,$request->query->get('id'));
        }  
        return $this->redirect($this->generateUrl($request->attributes->get('_route'),array('set'=>'datasetformat')));
        
    }

    public function setting($set,Request $request,$id)
    {
        if($set=='datasetformat'){
            $title='Add Dataset Format';
            $show = $this->getDoctrine()
        ->getRepository(DataType::class)
        ->findAll();
        if($id)$create = $this->getDoctrine()->getRepository(DataType::class)->find($id);
        else $create = new DataType();
        $type='datasetformat';
        $form = $this->createForm(DataTypeFormType::class, $create);
        }
        elseif ($set=='geospatial') {
            $title='Add Geospatial';
            $show = $this->getDoctrine()
        ->getRepository(Geospatial::class)
        ->findAll();
        $create = new Geospatial();
        $type='geospatial';
        $form = $this->createForm(GeospatialType::class, $create);
        }
        elseif ($set=='demographicgroup') {
            $title='Add Demographic Group';
            $show = $this->getDoctrine()
        ->getRepository(DataType::class)
        ->findAll();
        $create = new DataType();
        $type='demographicgroup';
        $form = $this->createForm(DataTypeFormType::class, $create);
        }
        elseif ($set=='studydesign') {
            $title='Add Study Design';
            $show = $this->getDoctrine()
        ->getRepository(DataType::class)
        ->findAll();
        $create = new DataType();
        $type='studydesign';
        $form = $this->createForm(DataTypeFormType::class, $create);
        }
        elseif ($set=='recordtype') {
            $title='Add Record Type';
            $show = $this->getDoctrine()
        ->getRepository(RecordType::class)
        ->findAll();
        if($id)$create = $this->getDoctrine()->getRepository(RecordType::class)->find($id);
        else $create = new RecordType();
        $type='recordtype';
        $form = $this->createForm(RecordTypeForm::class, $create);
        }

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($create);
            $entityManager->flush();
            return $this->redirectToRoute('dataset_async');
        }
        $data=$this->renderView('setting/dataset.html.twig',[
            'form' => $form->createView(),
            'types' => $show,
            'title'=>$title,
            'Type' => $type,
            'action'=>'new'
            ]);
        return $this->render('setting/index.html.twig', [
            'data' => $data,
        ]);
    }

    public function delete($set,$id,Request $request)
    {
        $data = $this->getDoctrine()->getRepository(DataType::class)->find($id);
           $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($data);
            $entityManager->flush();
        
    }
    
  
}
