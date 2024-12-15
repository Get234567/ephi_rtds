<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\Dataset;
use App\Entity\Tag;
use DateTime;


use App\Entity\Study;

use App\Form\FilterType;
use App\Entity\ActivityLog;
use App\Entity\DownloadRequest;
use App\Entity\DatasetAttachment;
use App\Entity\RequestType;
use App\Entity\StudyDesign;
use App\Entity\ItemType;
use App\Form\DatasetType;
use App\Entity\WorkUnit;

use App\Form\AdvancedSearchType;
use App\Form\Tag1Type;
use App\Form\DatasetStudySubjectType;
use App\Repository\DatasetRepository;
use App\Repository\DownloadRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Options;
use Dompdf\Dompdf;
use App\Entity\GeospatialPoints;
use App\Repository\ActivityLogRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use App\Service\PermissionChecker;
use App\Services\EPHISecurity;
/**
 * @Route("/dataset")
 */
class DatasetController extends AbstractController
{

    private $security;

    public function __construct(EPHISecurity $sec)
    {
        $this->security = $sec;
    }

    /**
     * @Route("/", name="dataset_index")
     */
    public function index( DatasetRepository $datasetRepository,Request $request,PaginatorInterface $paginator): Response
    {



      $em = $this->getDoctrine()->getManager();
      $datasetrepo = $em->getRepository(Dataset::class);
      $studyrepo = $em->getRepository(Study::class);
      $requestrepo = $em->getRepository(ActivityLog::class);
      $datasetData = null;
      $studyData = null;
      $requestData = null;
      $form2 = $this->createForm(FilterType::class, null);
      $form2->handleRequest($request);

      if ($form2->isSubmitted() && $form2->isValid()) {

      }
      $form2 = $this->createFormBuilder()
          ->add('Directorate', EntityType::class, [
              'class' => WorkUnit::class,
          ])
          ->add('Search', SubmitType::class, [
              'attr' => [
                  'class' => 'btn btn-primary',
              ],
          ])
          ->getForm();

      $form5->handleRequest($request);

      if ($form5->isSubmitted() && $form5->isValid()) {

          // dd($form2['Directorate']->getData()->getId());
          $queryBuilder = $datasetrepo->searchByDirectorate($form5['Directorate']->getData());
          $data = $paginator->paginate(
              $queryBuilder, /* query NOT result */
              $request->query->getInt('page', 1) /*page number*/,
              10/*limit per page*/
          );
          return $this->render('dashboard/search.html.twig', [
              'datasets' => $data,
          ]);

      }






        $this->security->isAllowed($this->getUser(),"dtst_show_indx");


        $datasets=null;
        $dataset = new Dataset();
        $form = $this->createForm(AdvancedSearchType::class,null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
    //         $entityManager = $this->getDoctrine()->getManager();
    //       $year=$form['publicationYear']->getData();
    //       $date=null;
    //       if($year!='All'){
    //       $date=(string)$year;
    //       }
    //    $datafilter=  $datasetRepository->filterDataset('',
    //    $form['coverageAge']->getData(),
    //    $form['coverageSex']->getData(),'','',
    //    $date,
    //    $confidentiality=1,
    //    $form['demographicGroup']->getData(),
    //    $form['datatype']->getData());

    //   $datasets=$datafilter->getQuery()->getResult();
    $dataTypeid=null;
    $studydesignid=null;
    if($form['datatype']->getData())
    $dataTypeid=$form['datatype']->getData()->getId();

    if($form['studydesign']->getData())
    $studydesignid=$form['studydesign']->getData()->getId();

    // dd($form['keywords']->getData());
       $queryBuilder= $datasetRepository->advancedSearch($form['keywords']->getData(),$dataTypeid,$studydesignid,$form['coveragesex']->getData(),$form['yearstart']->getData(),$form['yearend']->getData(),$form['isRestricted']->getData(),$form['cleaned']->getData());

       $data = $paginator->paginate(
         $queryBuilder, /* query NOT result */
         $request->query->getInt('page', 1)/*page number*/,
         10/*limit per page*/
     );




           return $this->render('dataset/index.html.twig', [
            'datasets' =>  $data,
            'directorateform' => $form2->createView(),
            'filterform' => $form->createView(),
        ]);

        }
        $search=$request->query->get('search');
        if($this->isGranted('ROLE_RESEARCHER')){

            $queryBuilder = $datasetRepository->findDataset('',$search);
            $datasets = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );

        }
        if($this->isGranted('ROLE_DATAMANAGER')){

            $queryBuilder = $datasetRepository->findDataset(null,$search);
            $datasets = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );

        }
        else {
        $queryBuilder = $datasetRepository->findDataset(null,$search);
        $datasets = $paginator->paginate(
            $queryBuilder, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        }





        return $this->render('dataset/index.html.twig', [
            'datasets' => $datasets,
            'filterform' => $form->createView(),
        ]);
    }




  /**
     * @Route("/make_download_request", name="make_download_request", methods={"POST"})
     */
    public function make_request(Request $request){
        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository(Dataset::class);
        $dataset=$repo->findOneBy(['id'=>$request->request->get('dataset')]);
        if($dataset){
        $ActivityLog=new ActivityLog();
                $ActivityLog->setRequestType('Download');
                $ActivityLog->setSender($this->getUser());
            $ActivityLog->setItemId($dataset->getId());
	        $ActivityLog->setStatus(0);

            $ActivityLog->setItemType('Dataset');
            $ActivityLog->setSeen(0);
            $ActivityLog->setRequestedDate(new DateTime());
            $em->persist($ActivityLog);
            $em->flush();
            $this->addFlash("success","Request successfully send");

            return $this->redirect($this->generateUrl('dataset_show',['id'=>$dataset->getId()]));
        }
        return $this->redirectToRoute('dataset_index');




    }


  /**
     * @Route("/download", name="download_dataset_file", methods={"POST"})
     */
    public function download(Request $request){

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository(DatasetAttachment::class);
        $attachment=$repo->findOneBy(['id'=>$request->request->get('attachment')]);
        if($attachment){
        $repod=$em->getRepository(Dataset::class);
        $dataset=$repod->findOneBy(['id'=>$attachment->getDataset()->getId()]);


        $file = 'uploads/dataset/'.$attachment->getAttachment();
        $response = new BinaryFileResponse($file);
        $response->headers->set('Content-Type', 'text/plain');
        $ex=explode('.',$attachment->getAttachment())[1];
        $filename=$attachment->getLabel().'.'.$ex;
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );
// || $this->isGranted('ROLE_DATAMANAGER'
        $check=$em->getRepository(ActivityLog::class);
        $hisown=$check->findOneBy(['AttachmentId'=>$attachment->getId(),'ItemType'=>'Dataset','ItemID'=> $dataset->getId(),'Sender'=>$this->getUser()->getId()]);
if($hisown){
return $response;

}
$isapparoved=$check->findOneBy(['AttachmentId'=>$attachment->getId(),'ItemType'=>'Dataset','ItemID'=> $dataset->getId()]);
if($isapparoved){
if($dataset->getConfidentiality() == "Access with request" && $isapparoved->getStatus()== 1 ){
        return $response;
       }

    }}
    return $this->redirectToRoute('dataset_index');

        }

    /**
     * @Route("/dataset_attchm_approval/{id}", name="dataset_attachment_approval", methods={"GET","POST"})
     */
    public function attachmentApprovalRequest(Request $request,Dataset $dataset, ActivityLogRepository $activityLogRepository)
    {
    $activities =  $activityLogRepository->findBy(['ItemID' => $dataset->getId()/*, "AttachmentId" => 'NULL' */]);
      $em=$this->getDoctrine()->getManager();
      $request_was_sent=0;
      if($activities)
      { foreach($activities as $act)
        {
            if(!$act->getAttachmentId())
            {
                $act->setStatus(0);
                $request_was_sent=1;
            }
            else
            {
                $act->setStatus(1);
            }


        }
        $em->flush();

      }
     if (!$request_was_sent)
      {
        $ActivityLog=new ActivityLog();
        $ActivityLog->setRequestType('Upload');
        $ActivityLog->setSender($this->getUser());
        $ActivityLog->setItemId($dataset->getId());
        $ActivityLog->setStatus(0);
        $ActivityLog->setAttachmentId(NULL);
        $ActivityLog->setItemType('Dataset');
        $ActivityLog->setSeen(false);
        $ActivityLog->setRequestedDate(new DateTime());
        $em->persist($ActivityLog);
      }

        $dataset->setApproved(0);

        $em->flush();
        return $this->redirectToRoute('dataset_attachment',['id'=>$dataset->getId()]);
    }

    /**
     * @Route("/attachment/{id}", name="dataset_attachment", methods={"GET","POST"})
     */
    public function attachment(Request $request,Dataset $dataset): Response
    {
        if(!$this->getUser()->getDatasets()->contains($dataset))
        {
            return $this->redirect($this->generateUrl('dataset_show',['id'=>$dataset->getId()]));
        }
        if ($dataset->getApproved() != 1 && $this->getUser()->getDatasets()->contains($dataset)) {

        }

      else
                $this->security->isAllowed($this->getUser(),"dtst_add_atch");
                $em=$this->getDoctrine()->getManager();
               if ($dataset->getApproved() == 1) {
                return $this->redirect($this->generateUrl('dataset_show',['id'=>$dataset->getId()]));
               }
                $form = $this->createFormBuilder()
                ->add('File',FileType::class)
                ->add('Add', SubmitType::class,['attr'=>['class'=>'btn btn-primary btn-sm']])
                ->getForm();
             $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {

                $attachment = new DatasetAttachment();
                $data = $form->getData();
                //upload
                $uploadedFile = $form['File']->getData();
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/dataset';
                $newFilename = md5(\uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($destination, $newFilename);

                $attachment->setDataset($dataset);
                $attachment->setAttachment($newFilename);
                $em = $this->getDoctrine()->getManager();
                $em->persist($attachment);
                $em->flush();
                //$attachment->setStatus(0);
                $ActivityLog=new ActivityLog();
                $ActivityLog->setRequestType('Upload');
                $ActivityLog->setSender($this->getUser());
            $ActivityLog->setItemId($dataset->getId());
	        $ActivityLog->setStatus(1);
	        $ActivityLog->setAttachmentId($attachment->getId());
            $ActivityLog->setItemType('Dataset');
            $ActivityLog->setSeen(false);
            $ActivityLog->setRequestedDate(new DateTime());
            $em->persist($ActivityLog);
            $em->flush();
            }
            $repo=$em->getRepository(DatasetAttachment::class);
            $attachments=$repo->findBy(['dataset'=>$dataset]);
                return $this->render('dataset/attachment.html.twig', [
                    'attachments' => $attachments,
                    'form'=>$form->createView()
                ]);
            }
            /**
             * @Route("attachment/{id}/edit", name="dataset_attachment_edit", methods={"GET","POST"})
             */
            public function editattachment(Request $request,DatasetAttachment $attachment): Response
            {
                $this->security->isAllowed($this->getUser(),"dtst_add_atch");
                $em=$this->getDoctrine()->getManager();

                $form = $this->createFormBuilder()
                ->add('aid',HiddenType::class,['data' =>$attachment->getId()])
                ->add('File',FileType::class,['required'   => false])
                ->add('Update', SubmitType::class,['attr'=>['class'=>'btn btn-primary btn-sm']])
                ->getForm();
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {


                $data = $form->getData();
                //upload
                $uploadedFile = $form['File']->getData();
                if($uploadedFile){
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/dataset';
                $newFilename = md5(\uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($destination, $newFilename);
         $attachment->setAttachment($newFilename);
        }





                $em = $this->getDoctrine()->getManager();
               // $em->persist($attachment);
                $em->flush();

               return $this->redirect($this->generateUrl('dataset_attachment',['id'=>$attachment->getDataset()->getId()]));
            }

            $repo=$em->getRepository(DatasetAttachment::class);
            $attachments=$repo->findBy(['dataset'=>$attachment->getDataset()->getId()]);
                return $this->render('dataset/attachment.html.twig', [
                    'attachments' => $attachments,
                    'form'=>$form->createView()
                ]);
            }


    /**
     * @Route("/attachment/{id}", name="delete_attachment",  methods={"DELETE"})
     */
    public function deleteAtch(Request $request,DatasetAttachment $datasetAttachment): Response
    {

        if ($this->isCsrfTokenValid('delete'.$datasetAttachment->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($datasetAttachment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('dataset_attachment',['id'=> $datasetAttachment->getDataset()->getId()]);

    }








     /**
     * @Route("/printdataset", name="printdataset")
     */
    public function printdataset(Request $request,DatasetRepository $datasetRepository)
    {

        $this->security->isAllowed($this->getUser(),"srch_res_exprt_pdf");

          $html="";

       if($request->query->get('search')){
        $search=$request->query->get('search');


           $queryBuilder = $datasetRepository->findDataset(null,$search);

   $data=$queryBuilder->getQuery()->getResult();

       }
       else{
           $data=$datasetRepository->findAll();
       }


       $html = $this->renderView("print_document/printdataset.html.twig", [
        'datasets'=> $data
    ]);

       $name="".rand(10000,99999);

       $pdfOptions = new Options();
       $pdfOptions->set('defaultFont', 'Arial');

       $dompdf = new Dompdf($pdfOptions);
      // $dompdf->set_option('isHtml5ParserEnabled', true);

       $dompdf->loadHtml($html);

       $dompdf->setPaper('A4', 'portrait');

       // Render the HTML as PDF
       $dompdf->render();


       // Output the generated PDF to Browser (force download)
       $dompdf->stream($name.".pdf", [
           "Attachment" => 0
       ]);





        return $this->render('dashboard/home.html.twig');
    }





    /**
     * @Route("/new", name="dataset_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $this->security->isAllowed($this->getUser(),"dtst_new");

        $dataset = new Dataset();
        $form = $this->createForm(DatasetType::class, $dataset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $uploadedk = $form['keywords']->getData();
            $keys=explode(',', $uploadedk);
            // dd($keys);
            $dataset->setKeywords($keys);

            $dataset->setCreatedAt(new \DateTime());
            $dataset->setDownloadCount(0);
            $dataset->setRequestCount(0);
            $dataset->setUpdatedAt(new \DateTime());
            $dataset->addOwner($this->getUser());

            $uploadedFile = $form['codeBookFileName']->getData();
            if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/dataset';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $dataset->setCodeBookFileName($newFilename);}
         /*   $uploadedFile = $form['FileUrl']->getData();
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/stDataset';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($destination, $newFilename);
            $dataset->setFileUrl($newFilename);
            */



            if($request->request->get('location_detail_f')){
                // $description=$request->request->get('location_detail_f');
                $name=$request->request->get('location_name_f');
                $description=$request->request->get('location_detail_f');
                $geo_location=$request->request->get('ge_loc');
                $geospatialPoint = new GeospatialPoints();
                // $geospatialPoint->set

                $geospatialPoint->setName($name);
                $geospatialPoint->setDescription($description);
                $geospatialPoint->setPoints($geo_location);
                // $geospatialPoint->setDataset($dataset);
                $entityManager->persist($geospatialPoint);
                $entityManager->flush();
                $dataset->addGeLocation($geospatialPoint);



                // dd($dataset);




            }else{
                // dd("no Data");
            }
            $entityManager->persist($dataset);
            $entityManager->flush();
            // dd($geospatialPoint);
            if($this->isGranted('ROLE_ADMIN')){
                $dataset->setStatus(true);
            }


            // $entityManager->flush();
            $this->addFlash('success',"Dataset Added Successfully");

            return $this->redirectToRoute('mydataset');
        }

        return $this->render('dataset/new.html.twig', [
            'dataset' => $dataset,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/mynew", name="dataset_my_new", methods={"GET","POST"})
     */
    public function mynew(Request $request): Response
    {

        $this->security->isAllowed($this->getUser(),"dtst_new");

        $dataset = new Dataset();
        $form = $this->createForm(DatasetType::class, $dataset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $uploadedk = $form['keywords']->getData();
            $keys=explode(',', $uploadedk);
            // dd($keys);
            $dataset->setKeywords($keys);

            $dataset->setCreatedAt(new \DateTime());
            $dataset->setDownloadCount(0);
            $dataset->setRequestCount(0);
            $dataset->setUpdatedAt(new \DateTime());
            $dataset->addOwner($this->getUser());

            $uploadedFile = $form['codeBookFileName']->getData();
            if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/dataset';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $dataset->setCodeBookFileName($newFilename);}



         /*   $uploadedFile = $form['FileUrl']->getData();
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/stDataset';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($destination, $newFilename);
            $dataset->setFileUrl($newFilename);
            */



            if($request->request->get('location_detail_f')){
                // $description=$request->request->get('location_detail_f');
                $name=$request->request->get('location_name_f');
                $description=$request->request->get('location_detail_f');
                $geo_location=$request->request->get('ge_loc');
                $geospatialPoint = new GeospatialPoints();
                // $geospatialPoint->set

                $geospatialPoint->setName($name);
                $geospatialPoint->setDescription($description);
                $geospatialPoint->setPoints($geo_location);
                // $geospatialPoint->setDataset($dataset);
                $entityManager->persist($geospatialPoint);
                $entityManager->flush();
                $dataset->addGeLocation($geospatialPoint);



                // dd($dataset);




            }else{
                // dd("no Data");
            }
            $entityManager->persist($dataset);
            $entityManager->flush();
            // dd($geospatialPoint);
            if($this->isGranted('ROLE_ADMIN')){
                $dataset->setStatus(true);
            }


            // $entityManager->flush();
            $this->addFlash('success',"Dataset Added Successfully");

            return $this->redirectToRoute('mydataset');
        }

        return $this->render('dataset/mynew.html.twig', [
            'dataset' => $dataset,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="dataset_show", methods={"GET","POST"})
     */
    public function show(Dataset $dataset, Request $req): Response
    {

        $this->security->isAllowed($this->getUser(),"dtst_show_dtl");
        $em=$this->getDoctrine()->getManager();
        $noaccess=true;
        $attachments=null;
        // dd($dataset->getGeLocations() );
        $last_point=null;
        $lock_detail=null;
        foreach ($dataset->getGeLocations() as $key => $value) {
            $lock_detail=$value;
            $pointdesc=json_decode($value->getPoints());
            $last_point=($pointdesc->points);
            $last_point=json_decode($pointdesc->points);
            break;
        }


        if( $dataset->getConfidentiality() == "Access with request"){

        $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());
        //dd($attachments);
            if($attachments)
            $noaccess=false;
            else  $noaccess=false;
        }

    else
    {
        $request=$em->getRepository(ActivityLog::class)->getrequestdatasetfile($dataset->getId(),$this->getUser()->getId());

        if($request){
            $noaccess=false;
        if($request[0]->getStatus() == 1){

            $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());

        }
    }
        else {
            $attachment=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());

            if($attachment){
                $noaccess=true;
            }
            else
            $noaccess=false;
        }




    }


      //multiple actions

      $tag=new Tag();
    $tagform = $this->createFormBuilder($tag)
    ->add('name',EntityType::class,['class'=>Tag::class])
    ->getForm()  ;


    $studydesignform = $this->createFormBuilder(null)
    ->add('name',EntityType::class,['class'=>StudyDesign::class])
    ->getForm()  ;


    $studydesignform->handleRequest($req);

    if ($studydesignform->isSubmitted() && $studydesignform->isValid()) {


    }


    $tagform->handleRequest($req);

    if ($tagform->isSubmitted() && $tagform->isValid()) {

        $id=$req->request->get("datasetid");
         $name=$tagform->getData()->getName();


        $entityManager = $this->getDoctrine()->getManager();
        $enttag = $this->getDoctrine()->getRepository(Tag::class);

        $tt =$enttag->findOneBy(['name' =>$name ]);

$dat = $entityManager->find('App\Entity\Dataset', $id);

$dat->addTag($tt);

 $entityManager->persist($dat);
$entityManager->flush();

$this->addFlash('success', 'Tag Added Successfully!!');
    }



   // dd($attachments);
        return $this->render('dataset/show.html.twig', [
            'dataset' => $dataset,
            'attachments'=> $attachments,
            'noaccess'=>$noaccess,
            'tagform' =>$tagform->createView(),
            'studydesignform' =>$studydesignform->createView(),
            'last_point'=>$last_point,
            'lock_detail'=>$lock_detail

        ]);


    }
    /**
     * @Route("/mystudy_dataset/{id}", name="my_study_dataset_show", methods={"GET","POST"})
     */
    public function myStudyDatasetShow(Dataset $dataset, Request $req): Response
    {

        $this->security->isAllowed($this->getUser(),"dtst_show_dtl");
        $em=$this->getDoctrine()->getManager();
        $noaccess=true;
        $attachments=null;
        // dd($dataset->getGeLocations() );
        $last_point=null;
        $lock_detail=null;
        foreach ($dataset->getGeLocations() as $key => $value) {
            $lock_detail=$value;
            $pointdesc=json_decode($value->getPoints());
            $last_point=($pointdesc->points);
            $last_point=json_decode($pointdesc->points);
            break;
        }


        if( $dataset->getConfidentiality() == "Access with request"){

        $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());
        //dd($attachments);
            if($attachments)
            $noaccess=false;
            else  $noaccess=false;
        }

    else
    {
        $request=$em->getRepository(ActivityLog::class)->getrequestdatasetfile($dataset->getId(),$this->getUser()->getId());

        if($request){
            $noaccess=false;
        if($request[0]->getStatus() == 1){

            $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());

        }
    }
        else {
            $attachment=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());

            if($attachment){
                $noaccess=true;
            }
            else
            $noaccess=false;
        }




    }




        return $this->render('dataset/study.data.show.html.twig', [
            'dataset' => $dataset,
            'attachments'=> $attachments,
            'noaccess' => $noaccess,
            'last_point'=>$last_point,
            'lock_detail'=>$lock_detail
            ]);
    }


    /**
     * @Route("/my/{id}", name="my_dataset_show", methods={"GET","POST"})
     */
    public function myshow(Dataset $dataset, Request $req): Response
    {
        if (!$this->getUser()->getDatasets()->contains($dataset)) {
           throw new AccessDeniedException();
        }



        $em=$this->getDoctrine()->getManager();
        $noaccess=true;
        $attachments=null;
        // dd($dataset->getGeLocations() );
        $last_point=null;
        $lock_detail=null;
        foreach ($dataset->getGeLocations() as $key => $value) {
            # code...
            // $geo_location=$
            $lock_detail=$value;
            // dd($value);
            $pointdesc=json_decode($value->getPoints());
            // dd($pointdesc);
            // $last_point=json_decode($pointdesc->points);
            $last_point=($pointdesc->points);
            // dd($last_point);
            $last_point=json_decode($pointdesc->points);
            // dd($last_point);
            // dd($last_point);
            //$last_point=$pointdesc->points;
            // dd(json_decode($last_point));

            // dd(json_encode(($pointdesc)));
            // $last_point=$pointdesc->points;

            // $last_point=json_decode(($pointdesc));
            // dd($last_point);
            //  $last_point=json_encode($last_point);
            //  $last_point= str_replace("\"","'",$last_point);
            //  dd($last_point);
            // $last_point=$value->getPoints();
            // dd($last_point);
            break;
            // dd(   );
        }


        if( $dataset->getConfidentiality() == "Access with request"){

        $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());
        //dd($attachments);
            if($attachments)
            $noaccess=false;
            else  $noaccess=false;
        }

    else {
        $request=$em->getRepository(ActivityLog::class)->getrequestdatasetfile($dataset->getId(),$this->getUser()->getId());

        if($request){
            $noaccess=false;
        if($request[0]->getStatus() == 1){

            $attachments=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());

        }
    }
        else {
            $attachment=$em->getRepository(DatasetAttachment::class)->getapprovedfile($dataset->getId());

            if($attachment){
                $noaccess=true;
            }
            else
            $noaccess=false;
        }




    }


      //multiple actions

      $tag=new Tag();
    $tagform = $this->createFormBuilder($tag)
    ->add('name',EntityType::class,['class'=>Tag::class])
    ->getForm()  ;


    $studydesignform = $this->createFormBuilder(null)
    ->add('name',EntityType::class,['class'=>StudyDesign::class])
    ->getForm()  ;


    $studydesignform->handleRequest($req);

    if ($studydesignform->isSubmitted() && $studydesignform->isValid()) {


    }


    $tagform->handleRequest($req);

    if ($tagform->isSubmitted() && $tagform->isValid()) {

        $id=$req->request->get("datasetid");
         $name=$tagform->getData()->getName();


        $entityManager = $this->getDoctrine()->getManager();
        $enttag = $this->getDoctrine()->getRepository(Tag::class);

        $tt =$enttag->findOneBy(['name' =>$name ]);

$dat = $entityManager->find('App\Entity\Dataset', $id);

$dat->addTag($tt);

 $entityManager->persist($dat);
$entityManager->flush();

$this->addFlash('success', 'Tag Added Successfully!!');
    }



   // dd($attachments);
        return $this->render('dataset/my_show.html.twig', [
            'dataset' => $dataset,
            'attachments'=> $attachments,
            'noaccess'=>$noaccess,
            'tagform' =>$tagform->createView(),
            'studydesignform' =>$studydesignform->createView(),
            'last_point'=>$last_point,
            'lock_detail'=>$lock_detail

        ]);


    }

    /**
     * @Route("/{id}/edit", name="dataset_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Dataset $dataset): Response
    {
        if ($dataset->getApproved() != 1 && $this->getUser()->getDatasets()->contains($dataset)) {

        }

      else       $this->security->isAllowed($this->getUser(),"dtst_edit");

        $form = $this->createForm(DatasetType::class, $dataset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dataset->setUpdatedAt(new \DateTime());
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("success", "Dataset updated successfully !!!");
            return $this->redirectToRoute('dataset_index');
        }

        return $this->render('dataset/edit.html.twig', [
            'dataset' => $dataset,
            'form' => $form->createView(),
        ]);
    }



      /**
     * @Route("/{id}/myedit", name="my_dataset_edit", methods={"GET","POST"})
     */
    public function myedit(Request $request, Dataset $dataset): Response
    {
        if ($dataset->getApproved() != 1 && $this->getUser()->getDatasets()->contains($dataset)) {

        }

      else       $this->security->isAllowed($this->getUser(),"dtst_edit");

        $form = $this->createForm(DatasetType::class, $dataset);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dataset->setUpdatedAt(new \DateTime());
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("success", "Dataset updated successfully !!!");
            return $this->redirectToRoute('dataset_index');
        }

        return $this->render('dataset/myedit.html.twig', [
            'dataset' => $dataset,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}", name="dataset_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Dataset $dataset, DownloadRequestRepository $DownloadRequestRepository ): Response
    {
        $this->security->isAllowed($this->getUser(),"dtst_del");
        if ($this->isCsrfTokenValid('delete'.$dataset->getId(), $request->request->get('_token')))
        {
            $entityManager = $this->getDoctrine()->getManager();
            //$drequests = $DownloadRequestRepository->find
           // dd($dataset);
           if($dataset->getDownloadRequests())
           {

                foreach ( $dataset->getDownloadRequests() as $key => $value)
                {
                    $entityManager->remove($value);
                    $entityManager->flush();
                }

            }

           if($dataset->getdatasetAttachments())
           {

                foreach ( $dataset->getdatasetAttachments() as $key => $value)
                {
                    $entityManager->remove($value);
                    $entityManager->flush();
                }

            }

           }

            $entityManager->remove($dataset);
            $entityManager->flush();


        return $this->redirectToRoute('dataset_index');
    }




}
