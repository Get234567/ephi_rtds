<?php

namespace App\Controller;
use DateTime;
use App\Entity\DownloadRequest;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\WorkUnit;
use App\Entity\DatasetAttachment;
use App\Entity\Dataset;
use App\Entity\DownloadRequestApprover;
use App\Form\DownloadRequest1Type;
use App\Repository\DownloadRequestRepository;
use App\Services\EPHISecurity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Services\MailerService;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Mailer\MailerInterface;

/**
 * @Route("/download")
 */
class DownloadRequestController extends AbstractController
{

    private $security;
    public function __construct(EPHISecurity $ePHISecurity)
    {
        $this->security=$ePHISecurity;
    }

    /**
     * @Route("/", name="download_request_index", methods={"GET"})
     */
    public function index(DownloadRequestRepository $downloadRequestRepository ,Request $request,PaginatorInterface $paginator): Response
    {
       $query= $downloadRequestRepository->findStatus(null,$request->query->get('search'))
;
$em=$this->getDoctrine()->getManager();

    $downloads = $paginator->paginate(
           $query, /* query NOT result */
           $request->query->getInt('page', 1)/*page number*/,
           10/*limit per page*/
       );
        return $this->render('download_request/index.html.twig', [
            'download_requests' => $downloads,
        ]);
    }

      /**
     * @Route("/rejected", name="rejected_download_request", methods={"GET"})
     */
    public function rejectedRequest(DownloadRequestRepository $downloadRequestRepository ,Request $request,PaginatorInterface $paginator): Response
    {
       $query= $downloadRequestRepository->findRejected();
;
    $downloads = $paginator->paginate(
           $query, /* query NOT result */
           $request->query->getInt('page', 1)/*page number*/,
           10/*limit per page*/
       );
        return $this->render('download_request/rejected.html.twig', [
            'download_requests' => $downloads,
        ]);
    }

  /**
     * @Route("/approve/{id}", name="approve_dataset_download_request")
     */
    public function approve(DownloadRequest $downloadRequest, MailerInterface $mailer ,MailerService $mservice,Request $request)
    {
      $approving_body_type = 0;
      $token=md5(uniqid());
      $em=$this->getDoctrine()->getManager();
      //$downloadRequest->setStatus(true);
      //$downloadRequest->setToken($token);
      //$downloadRequest->setApprovedDate(new DateTime());

      $approving_body1 = $this->security->isAllowed($this->getUser(),"approver1");
      $approving_body2 = $this->security->isAllowed($this->getUser(),"approver2");
      $approving_body3 = $this->security->isAllowed($this->getUser(),"approver3");
    if($approving_body1) $approving_body_type =1;
    if($approving_body2) $approving_body_type =2;
    if($approving_body3) $approving_body_type =3;


     $current_approvers = $downloadRequest->getDownloadRequestApprovers();
     $request_type=0;
     $forward_approval_has_been_done=0;
     $second_approval_allowed=0;



     foreach($current_approvers as $current_approver)
     {

        if($this->getUser() == $current_approver->getApprover()) //if it was me
        {

            $forward_approval_has_been_done=1;
            //reading approvers previous history.
            //if i have approve in the forward direction
            if($current_approver->getRequestDirection()==1 && $current_approver->getIsApproved()==1 )
            {
                //$approving_body_type = $current_approver->getQueryType();
                //check if my previous groups has been aproved it.

                //now i will will approve in the reverse direction.

                $second_approval_allowed = 1;

            }
            if($current_approver->getRequestDirection()==2)
            {

                $second_approval_allowed = 0;

            }

        }


     }


     if(!$forward_approval_has_been_done || $second_approval_allowed )
        {


            $right_order=0;


            if($approving_body_type==1)
            { if( $downloadRequest->getApprover2()==21)
                {
                    $downloadRequest->setApprover1(21);
                    $right_order=1;

                    $downloadRequest->setStatus(true);
                    $downloadRequest->setToken($token);
                    $downloadRequest->setApprovedDate(new DateTime());
                    $em->flush();

                    if($downloadRequest->getDataset()->getIsExternal())
                    $link="<a href="."http://".$request->server->get('HTTP_HOST').$downloadRequest->getDataset()->getExternalLink().">here</a>";
                    else{
                        $link="<a href="."http://".$request->server->get('HTTP_HOST').$this->generateUrl('download_dataset',['token'=>$token]).">here</a>";
                    $right_order=1;
                }
                }
                else
                {
                    $downloadRequest->setApprover1(11);
                    $right_order=1;
                }

            }
            if($approving_body_type==2)
            {

                if($downloadRequest->getApprover3()==11)
                {

                    $downloadRequest->setApprover2(21);
                    $right_order=1;
                }
                else if($downloadRequest->getApprover1()==11)
                {
                    $downloadRequest->setApprover2(11);
                    $right_order=1;
                }


            }
            if($approving_body_type==3)
            {

                if($downloadRequest->getApprover2()==11)
                {
                    $downloadRequest->setApprover3(11);
                    $right_order=1;
                }

            }
            if($right_order)
            {
                $new_dr_approver=new DownloadRequestApprover();
                $downloadRequest->addDownloadRequestApprover($new_dr_approver);
                $new_dr_approver->setApprover($this->getUser());
                $new_dr_approver->setIsApproved(true);
                $new_dr_approver->setRequestDirection($second_approval_allowed? 2:1);
                $new_dr_approver->setApprovedAt(new DateTime());
                $new_dr_approver->setQueryType($approving_body_type);
                $em->persist($new_dr_approver);
                $em->flush();
            }
            else
            {
                $this->addFlash("warning","You can approve this request only the previous office is accepted.");
                return $this->redirectToRoute('download_request_index');
            }

        }


         /*if($first_approved && $second_approved)
            {
            //do nothiing
            }
            else
            {


                $new_dr_approver=new DownloadRequestApprover();
                $downloadRequest->addDownloadRequestApprover($new_dr_approver);
                $new_dr_approver->setApprover($this->getUser());
                $new_dr_approver->setIsApproved(true);
                $new_dr_approver->setRequestDirection(2);
                $new_dr_approver->setApprovedAt(new DateTime());
                $new_dr_approver->setQueryType($request_type);
                $em->persist($new_dr_approver);
                $em->flush();
            }



     if($approving_body1) self::doApproval($first_approved, $second_approved,$downloadRequest,1);
     if($approving_body2) self::doApproval($first_approved, $second_approved,$downloadRequest,2);
     if($approving_body3) self::doApproval($first_approved, $second_approved,$downloadRequest,3);

    */




/*
      if($approver1 )



      if($approver1 && !$downloadRequest->getApprover1()) $downloadRequest->setApprover1(1);


      if($approver2 && !$downloadRequest->getApprover2() && $downloadRequest->getApprover1())
      {
          $downloadRequest->setApprover2(1);
      }
      if($approver3 && !$downloadRequest->getApprover3() && $downloadRequest->getApprover1() && $downloadRequest->getApprover2())
      {
          $downloadRequest->setApprover3(1);
          $downloadRequest->setStatus(true);
          $downloadRequest->setApprovedDate(new DateTime());

      }*/



      $em->flush();

      if($downloadRequest->getApprover1()==21){
        $downloadRequest->setStatus(true);
        $downloadRequest->setToken($token);

        $downloadRequest->setApprovedDate(new DateTime());
        $em->flush();


        if($downloadRequest->getDataset()->getIsExternal())
        $link="<a href="."http://".$downloadRequest->getDataset()->getExternalLink().">here</a>";
        else{
            $link="<a href="."http://".$request->server->get('HTTP_HOST').$this->generateUrl('download_dataset',['token'=>$token]).">here</a>";

        }

    $message="Your request to download dataset has been approved. You can click ".$link." to download the file";
    $mservice->sendEmail($mailer,$message,$downloadRequest->getEmail(), "ethiopiannationaldata@gmail.com");

      }


      $em->flush();

        $this->addFlash("success","approved successfully");
        return $this->redirectToRoute('download_request_index');
     }

     public function doApproval($first_approved, $second_approved,$downloadRequest,$approving_body)
     {
        if($first_approved && $second_approved)
            {
            //do nothiing
            }
            else
            {
            //approve the backward
            $new_dr_approver=new DownloadRequestApprover();
            $downloadRequest->addDownloadRequestApprover($new_dr_approver);
            // $downloadRequest->getDownloadRequestApprovers()->setApprover($this->getUser());
           // $downloadRequest->getDownloadRequestApprovers()->setIsApproved(1);
           // $downloadRequest->getDownloadRequestApprovers()->setDirection(2);
            }

     }



   /**
     * @Route("/reject/{id}", name="reject_dataset_download_request")
     */
    public function reject(Request $request, DownloadRequest $downloadRequest, MailerInterface $mailer ,MailerService $mservice){



    $message=$request->request->get('message');//"Your Request has been rejected!! for some reason";
    $mservice->sendEmail($mailer,$message,$downloadRequest->getEmail(), "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
    $em=$this->getDoctrine()->getManager();
   // $downloadRequest->setStatus(false);

    //$downloadRequest->setApprovedDate(new DateTime());

      $approver1 = $this->security->isAllowed($this->getUser(),"approver1");
      $approver2 = $this->security->isAllowed($this->getUser(),"approver2");
      $approver3 = $this->security->isAllowed($this->getUser(),"approver3");
      if($approver1)
      {
          $downloadRequest->setApprover1(0);
      }
      if($approver2)
      {
          $downloadRequest->setApprover2(0);
     }
      if($approver3)
      {
          $downloadRequest->setApprover3(0);
      }
      $downloadRequest->setStatus(false);
      $downloadRequest->setRejectionMessage($message);
      $downloadRequest->setApprovedDate(new DateTime());

       $em->flush();
       $this->addFlash("success","Rejected successfully");
       return $this->redirectToRoute('download_request_index');


     }


  /**
     * @Route("/dataset/{token}", name="download_dataset")
     */
    public function download(Request $request){

        $em=$this->getDoctrine()->getManager();

        $downloadRequest=$em->getRepository(DownloadRequest::class)->findOneBy(['Token'=>$request->get('token')]);
      // dd($downloadRequest->getCount());
        if($downloadRequest && (int)$downloadRequest->getCount() < 3 ){

        $dataset=$em->getRepository(Dataset::class)->findOneBy(['id'=>$downloadRequest->getDataset()]);

        $attachments=$em->getRepository(DatasetAttachment::class)->findBy(['id'=>$downloadRequest->getAttachment()]);
        if(!$attachments)
        $attachments=$em->getRepository(DatasetAttachment::class)->findBy(['dataset'=>$downloadRequest->getDataset()]);

        $files = [];
        $filename=[];
        foreach ($attachments as $attachment) {
            array_push($files, 'uploads/dataset/' . $attachment->getAttachment());
            array_push($filename, $attachment->getLabel().'.'.explode('.',$attachment->getAttachment())[1]);
        }
        // Create new Zip Archive.
        $zip = new \ZipArchive();
        // The name of the Zip documents.
        $zipName = $dataset->getName().'.zip';
        $zip->open($zipName,  \ZipArchive::CREATE);
        $i=0;
        foreach ($files as $file) {
            $zip->addFromString($filename[$i],  file_get_contents($file));
            $i=1;
        }
        $zip->close();
        $response = new Response(file_get_contents($zipName));
        $response->headers->set('Content-Type', 'application/zip');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $zipName . '"');
        $response->headers->set('Content-length', filesize($zipName));

        @unlink($zipName);


    $downloadRequest->setCount($downloadRequest->getCount()+1);

    $dataset->setDownloadCount($dataset->getDownloadCount()+1);
        $em->flush();
        return $response;
       // dd($attachments);

    }
    else{
        return new Response('Link expired please request the file');
    }
     }

    /**
     * @Route("/request_download", name="request_download", methods={"POST"})
     */

    public function request_download(Request $request, MailerInterface $mailer ,MailerService $mservice){
        $em=$this->getDoctrine()->getManager();

      $dataset=$em->getRepository(Dataset::class)->find(['id'=>(int)$request->request->get('Dataset')]);

      if($dataset){
                $DownloadRequest=new DownloadRequest();
                $DownloadRequest->setName($request->request->get('Name'));
                $DownloadRequest->setObjective($request->request->get('objective'));
                $DownloadRequest->setMiddleName($request->request->get('MiddleName'));
                $DownloadRequest->setLastName($request->request->get('LastName'));
                if($request->request->get('attachment'))
                $DownloadRequest->setAttachment($request->request->get('attachment'));
                $DownloadRequest->setAttachment([]);
                $uploadedFile=$request->files->get('file');
                if($uploadedFile){
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/dwn_req';
                $newFilename = md5(\uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($destination, $newFilename);
                $DownloadRequest->setFile($newFilename);

            }

                $restriction_file=$request->files->get('restriction_file');
                if($restriction_file){
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/dwn_req';
                $newFilename = md5(\uniqid()) . '.' . $restriction_file->getClientOriginalExtension();
                $restriction_file->move($destination, $newFilename);
                $DownloadRequest->setRestrictionFile($newFilename);

            }

                $DownloadRequest->setDataset($dataset);
                $DownloadRequest->setCount(0);
                $DownloadRequest->setPhone($request->request->get('Phone'));
                $DownloadRequest->setEmail($request->request->get('Email'));
                if($request->request->get('Reasonselect')=='other')
                $DownloadRequest->setReason($request->request->get('Reason'));
                else
                $DownloadRequest->setReason($request->request->get('Reasonselect'));

                if($request->request->get('Affliationselect')=='other')
                $DownloadRequest->setAffliation($request->request->get('Affliation'));
                else
                $DownloadRequest->setAffliation($request->request->get('Affliationselect'));

                $DownloadRequest->setRequestedDate(new DateTime());
                if($this->getUser()){
                    $DownloadRequest->setInternalRequester($this->getUser());
                }

                $dataset->setRequestCount($dataset->getRequestCount()+1);
	          $em->flush();
            $em->persist($DownloadRequest);
            $em->flush();
            $this->addFlash("success","Request successfull, we will send you the download link!!");
            $name = null;
            $email = null;
              $data = null;


            if($request->request->get('Name')){
              $name = $request->request->get('Name');
            }
              if($request->request->get('Email')){
              $email = $request->request->get('Email');
              $data = $dataset;
              $message="Hello,                            Mr/Mrs. ".$name." has requested ".$data.".    his/her email is ".$email."";
         $mservice->sendEmail($mailer,$message, "enbish.blt@gmail.com",
"ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);

if($dataset->getworkunit()->getName() == "Ethiopian Public Health Institute (EPHI)"){

              $message18="Hello,                            Mr/Mrs. ".$name." has requested your Directorates data. The title is ".$data.".    his/her email is ".$email." Please kindly login to https://rtds.ephi.gov.et/public/login";
            $mservice->sendEmail($mailer,$message18 , "enbish.blt@gmail.com",
            "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
          }
          else if($dataset->getworkunit()->getName() == "HIV and TB Research Directorate"){

                        $message17="Hello,                            Mr/Mrs. ".$name." has requested HIV and TB Research Directorate data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                      $mservice->sendEmail($mailer,$message17 , "enbish.blt@gmail.com",
                      "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                    }
                    else if($dataset->getworkunit()->getName() == "Bacteriology, Parasitology and Zoonosis"){

                                  $message16="Hello,                            Mr/Mrs. ".$name." has requested Bacteriology, Parasitology and Zoonosis data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                $mservice->sendEmail($mailer,$message16 , "enbish.blt@gmail.com",
                                "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                              }
                              else if($dataset->getworkunit()->getName() == "Vaccines and Diagnostic Production Directorate"){

                                            $message15="Hello,                            Mr/Mrs. ".$name." has requested Vaccines and Diagnostic Production Directorate data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                          $mservice->sendEmail($mailer,$message15 , "enbish.blt@gmail.com",
                                          "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                                        }
                                      else if($dataset->getworkunit()->getName() == "Food Science and Nutrition Research Directorate"){

                                                      $message14="Hello,                            Mr/Mrs. ".$name." has requested Food Science and Nutrition Research Directorate data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                                    $mservice->sendEmail($mailer,$message14 , "enbish.blt@gmail.com",
                                                    "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                                                  }
                                                else if($dataset->getworkunit()->getName() == "Health System and Reproductive Health"){

                                                                $message13="Hello,                            Mr/Mrs. ".$name." has requested Health System and Reproductive Health data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                                              $mservice->sendEmail($mailer,$message13 , "enbish.blt@gmail.com",
                                                              "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                                                            }
                                                          else if($dataset->getworkunit()->getName() == "Public Health Emergency Management"){

                                                                          $message12="Hello,                            Mr/Mrs. ".$name." has requested Public Health Emergency Management data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                                                        $mservice->sendEmail($mailer,$message12 , "enbish.blt@gmail.com",
                                                                        "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                                                                      }
                                                                      else if($dataset->getworkunit()->getName() == "CHAMPS"){

                                                                                    $message11="Hello,                            Mr/Mrs. ".$name." has requested CHAMPS data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                                                                  $mservice->sendEmail($mailer,$message11 , "enbish.blt@gmail.com",
                                                                                  "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                                                                                }
                                                                              else if($dataset->getworkunit()->getName() == "CSA"){

                                                                                              $message10="Hello,                            Mr/Mrs. ".$name." has requested CSA data. The title is ".$data.".    his/her email is ".$email." Please Login to research tracking system (https://rtds.ephi.gov.et) and approve or reject the data request";
                                                                                            $mservice->sendEmail($mailer,$message10 , "enbish.blt@gmail.com",
                                                                                            "ndmcdatashare@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
                                                                                          }







}
            return $this->redirect($this->generateUrl('showdetail',['id'=>$request->request->get('Dataset')]));
      }


return new Response("invalid file");
    }



  /**
     * @Route("/download_restriction", name="download_restriction", methods={"POST"})
     */
     public function download_restriction_file(Request $request){

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository(DownloadRequest::class);
        $attachment=$repo->findOneBy(['id'=>$request->request->get('restriction')]);
        if($attachment){



        $file = $this->getParameter('kernel.project_dir') . '/public/uploads/dwn_req/'.$attachment->getRestrictionFile();
        $response = new BinaryFileResponse($file);
        $response->headers->set('Content-Type', 'text/plain');
        $ex=explode('.',$attachment->getRestrictionFile())[1];
        $filename=$attachment->getRestrictionFile().'.'.$ex;
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );

        return $response;
    }


    return $this->redirectToRoute('download_request_index');

        }

  /**
     * @Route("/download_legitimacy", name="download_legitimacy", methods={"POST"})
     */
     public function download_legitimacy_file(Request $request){

        $em=$this->getDoctrine()->getManager();
        $repo=$em->getRepository(DownloadRequest::class);
        $attachment=$repo->findOneBy(['id'=>$request->request->get('legitimacy')]);
        if($attachment){



        $file = $this->getParameter('kernel.project_dir') . '/public/uploads/dwn_req/'.$attachment->getFile();
        $response = new BinaryFileResponse($file);
        $response->headers->set('Content-Type', 'text/plain');
        $ex=explode('.',$attachment->getFile())[1];
        $filename=$attachment->getFile().'.'.$ex;
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );

        return $response;
    }


    return $this->redirectToRoute('download_request_index');

        }


    /**
     * @Route("/new", name="download_request_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $downloadRequest = new DownloadRequest();
        $form = $this->createForm(DownloadRequest1Type::class, $downloadRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($downloadRequest);
            $entityManager->flush();

            return $this->redirectToRoute('download_request_index');
        }

        return $this->render('download_request/new.html.twig', [
            'download_request' => $downloadRequest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="download_request_show", methods={"GET"})
     */

    public function show(DownloadRequest $downloadRequest, EntityManagerInterface $em,DownloadRequestRepository $downloadRequestRepository ,Request $request,PaginatorInterface $paginator): Response
    {
  $sqlfor99 = "SELECT * FROM dataapprove";
  $em=$this->getDoctrine()->getManager();
              $conn = $em->getConnection();
              $stmt101=$conn->prepare($sqlfor99);
              $stmt101->execute();
              $dah=array();
               $h=[];

               $hh=[];

               $hhh=[];



                    $data101 = $stmt101->fetchAll();
                    foreach ($data101 as $key => $value) {
                      if(($value['user_id'] == $this->getUser()->getId()) && ($value['work_unit_id']==$downloadRequest->getDataset()->getworkunit()->getId())){
//dd($downloadRequest->getDataset()->getworkunit()->getId());
                          return $this->render('download_request/show.html.twig', [
                              'download_request' => $downloadRequest,
                          ]);
                      }




                    }
                    $query= $downloadRequestRepository->findStatus(null,$request->query->get('search'))
                   ;
                   $em=$this->getDoctrine()->getManager();

                   $downloads = $paginator->paginate(
                        $query, /* query NOT result */
                        $request->query->getInt('page', 1)/*page number*/,
                        10/*limit per page*/
                    );
                        $this->addFlash("success","You don't have an access priviledge to approve or reject another data request");

                        return $this->render('download_request/index.html.twig', [
                            'download_requests' => $downloads,
                        ]);



//dd($this->getUser()->getId());
      //dd($downloadRequest->getDataset()->getworkunit()->getId());

    }

    /**
     * @Route("/{id}/edit", name="download_request_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, DownloadRequest $downloadRequest): Response
    {
        $form = $this->createForm(DownloadRequest1Type::class, $downloadRequest);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('download_request_index');
        }

        return $this->render('download_request/edit.html.twig', [
            'download_request' => $downloadRequest,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="download_request_delete", methods={"DELETE"})
     */
    public function delete(Request $request, DownloadRequest $downloadRequest): Response
    {
        if ($this->isCsrfTokenValid('delete'.$downloadRequest->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($downloadRequest);
            $entityManager->flush();
        }

        return $this->redirectToRoute('download_request_index');
    }
}
