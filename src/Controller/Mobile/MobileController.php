<?php

namespace App\Controller\Mobile;

use App\Entity\Campus;
use App\Entity\CampusDiscription;
use App\Entity\Student;
use App\Entity\ClassBlock;
use App\Entity\ClassRoom;
use App\Entity\DormBlock;
use DateTime;

use App\Repository\StudentRepository;
use App\Repository\StudyRepository;
use FOS\RestBundle\Controller\AbstractFOSRestController;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\MobileService;
use App\Repository\DatasetRepository;
use  App\Repository\WorkUnitRepository;
use App\Repository\FosUserRepository;
use App\Repository\ActivityLogRepository;
use App\Entity\ActivityLog;
use App\Entity\DownloadRequest;


use App\Entity\SystemFeedback;
use App\Repository\SystemFeedbackRepository;
use  App\Repository\DatasetAttachmentRepository;


class MobileController extends FOSRestController
{   
   
    // private $repo;
    // public function __construct(StudentRepository $repo){
    //     $this->repo=$repo;
        
    // }
    

    /**
     * @Route("/mobile", name="mobile" )
     */
    public function index()
    {
        
        $jsonData=[];
        // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();
        return new JsonResponse($jsonData);
        
        
    }


    
    /**
     * @Route("/attachment_request", name="attachment_request", methods={"POST"})
     */
    public function request_download(Request $request,DatasetRepository $datasetrepo){  
       
        // dd($request->request->get('dataset'));
      $dataset=$datasetrepo->find(['id'=>(int)$request->request->get('dataset')]);
      $em=$this->getDoctrine()->getManager();

      if($dataset){
                $DownloadRequest=new DownloadRequest();
                $names=explode(' ',$request->request->get('fullname'));
               
             
                $DownloadRequest->setName($names[0]);
                $DownloadRequest->setMiddleName($names[1]);
                $DownloadRequest->setLastName($names[2]);
                if($request->request->get('attachment'))
                $DownloadRequest->setAttachment(json_decode($request->request->get('attachment')));
                else
                $DownloadRequest->setAttachment([]);
                $DownloadRequest->setDataset($dataset);
                $DownloadRequest->setCount(0);
                
                $DownloadRequest->setPhone($request->request->get('phone'));
                $DownloadRequest->setEmail($request->request->get('email'));
            
                $DownloadRequest->setReason($request->request->get('reason'));

                $DownloadRequest->setRequestedDate(new DateTime());
                $uploadedFile=$request->files->get('evedence');
                if($uploadedFile){
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/dwn_req';
                $newFilename = md5(\uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($destination, $newFilename);
                $DownloadRequest->setFile($newFilename);
            }else{
                // $DownloadRequest->setFile($newFilename);
            }
                

	          $em->flush();
            $em->persist($DownloadRequest);
            $em->flush();
            $json_data=[
                'status'=>'success',
                'message'=>'saved Successfully'
            ];
            return new JsonResponse($json_data);
     
          
      }else{
        $json_data=[
            'status'=>'success',
            'message'=>'saved Successfully'
          ];
          return new JsonResponse('Invalid');
      }
      return new JsonResponse('Error');
   
    } 

      /**
     * @Route("/upload_file", name="upload_file" )
     */
    public function upload_file(Request $request)
    {
        if($request->get('id')){
            $jsonData=[
                'id'=>$request->get('id'),
            ];
            return new JsonResponse($jsonData);
        }else if($request->request->get('id')){
            $jsonData=[
                'id'=>$request->get('id'),
            ];
            return new JsonResponse($jsonData);
        }else{
            $jsonData=[
                'error'=>"No Parameter",
            ];
            return new JsonResponse($jsonData);
        }
       
        // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();
       
        // return new JsonResponse($jsonData);
        
        
    }
    /**
     * @Route("/accept_feedback", name="accept_feedback" )
     */
    public function acceptFeedback(Request $request)
    {
        
        $entityManager = $this->getDoctrine()->getManager();
        $title=$request->get('title');
     if($title){
       
        $fullname=$request->get('fullname');
        $email=$request->get('email');
        $body=$request->get('body');
        $systemFeedback = new SystemFeedback();
        $systemFeedback->setFullName($fullname);
        $systemFeedback->setEmail($email);
        $systemFeedback->setTitle($title);
        $systemFeedback->setBody($body);
        $systemFeedback->setStatus(0);
        $systemFeedback->setSubmittedDate(new \DateTime());
        $entityManager->persist($systemFeedback);

        $entityManager->flush();
        $jsonData=['status'=>"saved"];
     }else{
        $jsonData=['status'=>"Error"];
     }
       
        // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();

       
      
       
           
            // $systemFeedback->setSubmittedDate(new \DateTime());
            // $entityManager->persist($systemFeedback);

            // $entityManager->flush();

       

        return new JsonResponse($jsonData);
        
        
    }
    /**
     * @Route("/log_in/{username}/{password}", name="login" )
     */
    public function login($username,$password,FosUserRepository $fos_repo)
    {
        
        $jsonData=[];
        $user=$fos_repo->findOneBy(['username'=>$username]);
          
            if ($user) {
                $actual_password=$user->getPassword();
                if($password){
                if (password_verify($password, $actual_password)) {

                    
                        // $jsonData='Password is valid!';
                        $status="success";
                        $message='Password is valid';
                        $userData=$user->getUserInfo();
                        // dd($user);
                        // $user_info=[
                        //     'id'=>$user->getId(),
                        //     'role'=>$user->getRoles(),
                        //     'name'=>$userData->getName()
                        // ];
                        $user_info=[
                            'id'=>$user->getId(),
                            'role'=>$user->getRoles(),
                            'email'=>$user->getEmail(),
                            'full_name'=>$userData->getName(),
                            'phone'=>$userData->getPhone(),
                            'address'=>$userData->getAddress(),
                            'profile_pic'=>'profile_pic/'.$userData->getImage(),
                        ];
                        $jsonData=[
                            'status'=>$status,
                            'user_detail'=>$user_info

                        ];
                       
                        return new JsonResponse($jsonData);
                    } else {
                        $status="failed";
                        $message='Invalid password.';
                        $jsonData=[
                            'status'=>$status,
                            'message'=>$message
                        ];
                       
                        return new JsonResponse($jsonData);
                    
                    }

                //     $jsonData='Password is valid!';
                // return new JsonResponse($jsonData);
                }else{
                    $status="failed";
                    $message='Password is valid!';
                    
                    $jsonData=[
                        'status'=>$status,
                        'message'=>$message
                    ];
                    // $jsonData='Password is valid!';
                    return new JsonResponse($jsonData);
                }
               
            } else {
                $status="failed";
                $message='Invalid username.';
                $jsonData=[
                    'status'=>$status,
                    'message'=>$message
                ];
                return new JsonResponse($jsonData);
               
            }
            // if (password_verify('123456', $hash)) {

               
            //     $jsonData='Password is valid!';
            //     return new JsonResponse($jsonData);
            // } else {
            //     $jsonData='Invalid password.';
            //     return new JsonResponse($jsonData);
               
            // }
        // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();
       
        
        
    }
    /**
     * @Route("/my_datastudy/{id}", name="my_datastudy" )
     */
    public function myDataStudy($id,StudyRepository $studyrepo ,DatasetRepository $datasetrepo,FosUserRepository $fos_repo)
    {
        # code...
        $user=$fos_repo->findOneBy(['id'=>$id]);
        if($user){
            // dd();


            // $data_array = $studyrepo->findYourStudyResult($id);
            // $data_array = $datasetrepo->findYourDatasetResult($id);
            // dd($data_array);
            $allData=array();
          
            // $response=array();
            // $data=$mobileservice->serachDataset($key,$datarepo);
            //study
            // $data_array=$studyrepo->findYourStudyResult($id);
            // $data_array=$datarepo->findDatasetResult(null,$key);
            //dataset
            // $dataset_array=$mobileservice->serachDataset($key,$datasetRepo);
            $dataset_array=$user->getDatasets();
            $data_array = $user->getStudies();
            // dd($data_array);



            if($data_array ||  $dataset_array ){


                $allData=array();
                if($data_array){
                    
                    // dd(count($data_array));
                    foreach ($data_array as $key => $data) {
                        
                        $yearConducted=$data->getYearConducted()?$data->getYearConducted():new  \DateTime();
                        $yearPublished=$data->getYearPublished()?$data->getYearPublished():new  \DateTime();
                        $row=[
                            'id'=>$data->getId()."",
                            'title'=>$data->getTitle(),
                            
                            'irbCode'=>$data->getIrbCode(),
                            'yearConducted'=>$yearConducted,
                            'yearPublished'=>$yearPublished,
                            'budget'=>$data->getBudget(),
                            'comment'=>$data->getComment(),
                            'objective'=>$data->getObjective(),
                            'researchQuestion'=>$data->getResearchQuestion(),
                            'summary'=>$data->getSummary(),
                            'description'=>$data->getDescription(),
                         
                            'geography'=>$data->getGeography(),
                            'timePeriodCoverageStart'=>$data->getTimePeriodCoverageStart(),
                            'timePeriodCoverageEnd'=>$data->getTimePeriodCoverageEnd(),
                            'publisher'=>$data->getPublisher(),
                            'studyType'=>$data->getStudyType()."",
                            'workUnit'=>$data->getWorkUnit(),
                            'feedback'=>"",
                            'type'=>"studyType",
                         
                           ];
                          
                           array_push($allData,$row);
        
        
         
                        //    $alldata=$dsrepo->namedSearch($key)->getQuery()->getResult();
                
                      
                    }
                }
               
                if($dataset_array){
                    foreach ($dataset_array as $key => $data) {
                        # code...
                        // echo $data;
                        // die;
                       
                        $row=[
                            'id'=>$data->getId(),
                            'name'=>$data->getName(),
                            'label'=>$data->getLabel(),
                            'format'=>$data->getFormat()."",
                            'coverageLocation'=>$data->getCoverageLocation(),
                            'coverageSex'=>$data->getCoverageSex(),
                            'coverageAge'=>$data->getCoverageAge(),
                            'size'=>$data->getSize(),
                            'summary'=>$data->getSummary(),
                            'codeBook'=>$data->getCodeBook(),
                            'codeBookFileName'=>$data->getCodeBookFileName(),
                            'disagregationLevel'=>$data->getDisagregationLevel(),
                            'keywords'=>$data->getKeywords(),
                            'recommended'=>$data->getRecommended(),
                            'timePeriodCoverageEnd'=>$data->getTimePeriodCoverageEnd(),
                            'treatment'=>$data->getTreatment(),
                            'timePeriodCoverageStart'=>$data->getTimePeriodCoverageStart(),
                            'publicationYear'=>$data->getPublicationYear(),
                            'sugestedCitation'=>$data->getSugestedCitation(),
                            'otherIdType'=>$data->getOtherIdType(),
                            'description'=>$data->getDescription(),
                            'recievedDate'=>$data->getRecievedDate(),
                            'catalogCompletedDate'=>$data->getCatalogCompletedDate(),
                            'numberOfUnits'=>$data->getNumberOfUnits(),
                            'confidentiality'=>$data->getConfidentiality()."",
                            'dataType'=>$data->getDataType()."",
                            'studyDesign'=>$data->getStudyDesign()."",
                            'coverageType'=>$data->getCoverageType()."",
                            'datasetCategory'=>$data->getDatasetCategory()."",
                            'demographicGroup'=>$data->getDemographicGroup()."",
                            'geospatial'=>$data->getGeospatial()."",
                            'microdataTabulationStatus'=>$data->getMicrodataTabulationStatus()."",
                            'publicationStatus'=>$data->getPublicationStatus()."",
                            'publisher'=>$data->getPublisher(),
                            'FileUrl'=>$data->getFileUrl(),
                            'Status'=>$data->getStatus(),
                            'type'=>"dataset",
                            'title'=>$data->getTitle(),
                            'availablity'=>$data->getAvaliablity(),
    
                            'downloadCount'=>$data->getDownloadCount(),
                            'workunit'=>$data->getWorkUnit()."",
                           ];
                        
                           array_push($allData,$row);
                
                   
                    }
                }
    
               
                // dd($reponse);
             //    return $reponse;
    
    
             $status="success";
           
             $response=[
                 'status'=>$status,
                 'data'=>$allData,
             ];
             return new JsonResponse($response);
    
    
            
            }else{
                $status="error";
                $response=[
                    'status'=>$status,
                    'message'=>'no record found',
                ];
                return new JsonResponse($response);
            }
        }
       

       




     
        




        // $queryBuilder = $datasetrepo->findYourDatasetResult($id);
      
    
    }

    /**
     * @Route("/my_request/{id}", name="my_request_api" )
     */
    public function my_request($id, ActivityLogRepository $activityrepo)
    {
      
        // die;
        $result = $activityrepo->findMyRequest($id );
        if ($result) {
            $status="success";
            $allData=array();
            foreach ($result as $key => $data) {

                    $row=[
                        'id'=>$data->getId()."",
                        'Status'=>$data->getStatus(),
                        
                        'Remark'=>$data->getRemark(),
                        'ItemID'=>$data->getItemID(),
                        'RequestedDate'=>$data->getRequestedDate(),
                        'ApprovedDate'=>$data->getApprovedDate(),
                        'RequestType'=>$data->getRequestType(),
                        'ItemType'=>$data->getItemType(),
                        'seen'=>$data->getSeen(),
                        'AttachmentId'=>$data->getAttachmentId(),
                     
                     
                       ];
                       array_push($allData,$row);
            }

            $jsonData=[
                       'status'=>$status,
                        'data'=>$allData
           ];
                               
              return new JsonResponse($jsonData);

        }else{
            $status="error";
            $jsonData=[
                       'status'=>$status,
                        'message'=>"No Reuest"
           ];
                               
              return new JsonResponse($jsonData);
        }
        // dd($result);
        // $jsonData=[];
        // $user=$fos_repo->findOneBy(['username'=>$username]);
          
        //     if ($user) {
        //         $actual_password=$user->getPassword();
        //         if($password){
        //         if (password_verify($password, $actual_password)) {

                    
        //                 // $jsonData='Password is valid!';
        //                 $status="success";
        //                 $message='Password is valid';
        //                 $userData=$user->getUserInfo();

        //                 $user_info=[
        //                     'id'=>$userData->getId(),
        //                     'name'=>$userData->getName()
        //                 ];

        //                 $jsonData=[
        //                     'status'=>$status,
        //                     'user_detail'=>$user_info

        //                 ];
                       
        //                 return new JsonResponse($jsonData);
        //             } else {
        //                 $status="failed";
        //                 $message='Invalid password.';
        //                 $jsonData=[
        //                     'status'=>$status,
        //                     'message'=>$message
        //                 ];
                       
        //                 return new JsonResponse($jsonData);
                    
        //             }

        //         //     $jsonData='Password is valid!';
        //         // return new JsonResponse($jsonData);
        //         }else{
        //             $status="failed";
        //             $message='Password is valid!';
                    
        //             $jsonData=[
        //                 'status'=>$status,
        //                 'message'=>$message
        //             ];
        //             // $jsonData='Password is valid!';
        //             return new JsonResponse($jsonData);
        //         }
               
        //     } else {
        //         $status="failed";
        //         $message='Invalid username.';
        //         $jsonData=[
        //             'status'=>$status,
        //             'message'=>$message
        //         ];
        //         return new JsonResponse($jsonData);
               
        //     }
        //    
        // // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();
       
        
        
    }

  
    /**
     * @Route("/searchdataset/{key}", name="searchdataset" )
     */
        public function searchStudy($key,StudyRepository $datarepo ,DatasetRepository $datasetRepo,MobileService $mobileservice ,
        DatasetAttachmentRepository $attachementrepo)
        {
            # code...
            $response=array();
            // $data=$mobileservice->serachDataset($key,$datarepo);
            $data_array=$datarepo->findDatasetResult(null,$key);
            $dataset_array=$mobileservice->serachDataset($key,$datasetRepo,$attachementrepo);

            // dd($dataset_array);


            if($data_array ||  $dataset_array ){


                $allData=array();
                foreach ($data_array as $key => $data) {
                    # code...
                //    dd($data);

                $yearConducted=$data->getYearConducted()?$data->getYearConducted():new  \DateTime();
                $yearPublished=$data->getYearPublished()?$data->getYearPublished():new  \DateTime();
                $timePeriodCoverageStart=$data->getTimePeriodCoverageStart()?$data->getTimePeriodCoverageStart():new  \DateTime();
                $timePeriodCoverageEnd=$data->getTimePeriodCoverageEnd()?$data->getTimePeriodCoverageEnd():new  \DateTime();
                if($data->getStatus()!="4"){
                    continue;
                }
                     

                    $row=[
                        'id'=>$data->getId()."",
                        'title'=>$data->getTitle(),
                        
                        'irbCode'=>$data->getIrbCode(),
                        'yearConducted'=>$yearConducted,
                        'yearPublished'=>$yearPublished,
                        'budget'=>$data->getBudget(),
                        'comment'=>$data->getComment(),
                        'objective'=>$data->getObjective(),
                        'researchQuestion'=>$data->getResearchQuestion(),
                        'summary'=>$data->getSummary(),
                        'description'=>$data->getDescription(),
                     
                        'geography'=>$data->getGeography(),
                        'timePeriodCoverageStart'=>$timePeriodCoverageStart,
                        'timePeriodCoverageEnd'=>$timePeriodCoverageEnd,
                        'publisher'=>$data->getPublisher(),
                        'studyType'=>$data->getStudyType()."",
                        'workUnit'=>$data->getWorkUnit(),
                        'feedback'=>"",
                        'type'=>"studyType",
                     
                       ];
                       array_push($allData,$row);
 
                }





                $status="success";
              
                $allData=array_merge($allData,$dataset_array);
                $response=[
                    'status'=>$status,
                    'data'=>$allData,
                ];
                return new JsonResponse($response);
            }else{
                $status="error";
                $response=[
                    'status'=>$status,
                    'message'=>'no record found',
                ];
                return new JsonResponse($response);
            }
            
            // return new JsonResponse();
        }
        
        
     /**
     * @Route("/searchstudy/{key}", name="searchstudy" )
     */
    public function searchDataset($key,DatasetRepository $datarepo ,MobileService $mobileservice)
    {
        # code...
        $response=array();
        $data=$mobileservice->serachDataset($key,$datarepo);
        if($data){
            $status="success";
            $response=[
                'status'=>$status,
                'data'=>$data,
            ];
            return new JsonResponse($response);
        }else{
            $status="error";
            $response=[
                'status'=>$status,
                'message'=>'no record found',
            ];
            return new JsonResponse($response);
        }
        
        // return new JsonResponse();
    }

      /**
     * @Route("/getalldirectotares", name="getalldirectotares" )
     */
    public function findAllDirectorates(WorkUnitRepository $workripo ,MobileService $mobileservice)
    {
        # code...
        $allworkUnits=array();
        $allwork_units=$workripo->findAll();

        foreach ($allwork_units as $key => $workunit) {
            $parent_id=$workunit->getParent()?$workunit->getParent()->getId():-1;
            $row=[
                'id'=>$workunit->getId()."",
                'name'=>$workunit->getName(),
                'parent'=>$parent_id."",
                'description'=>$workunit->getDescription(),

            ];
           
           array_push($allworkUnits,$row);
        }
        $status="success";
        $response=[
            'status'=>$status,
            'data'=>$allworkUnits,
        ];
     
        return new JsonResponse($response);
    }
    /**
     * @Route("/fetchdirectorate/{id}", name="fetch_directorate_dataset" )
     */
    public function fectDirectoratedata($id,WorkUnitRepository $workripo ,MobileService $mobileservice,DatasetAttachmentRepository $attachmentRepo)
    {
        # code...
        $allworkUnits=array();
        $workUnit=$workripo->findOneBy(['id'=>$id]);
        if(!$workUnit){
            $status="error";
            $response=[
                'status'=>$status,
                'message'=>'No workunit With This ID',
            ];
            return new JsonResponse($response);
        }else{
            $wdatasets=$workUnit->getDatasets();
            if($wdatasets){
                $status="success";


                $alldata=$wdatasets;
        
                // id,name,label,format,coverageLocation,coverageAge,
                $datasets=array();
                foreach ($alldata as $key => $data) {
                    # code...
                    // echo $data;
                    // die;
                    $attachemnts=array();
        $arrayAttachments=$attachmentRepo->findBy(['dataset'=>$data->getId()]);
        foreach ($arrayAttachments as $key => $attachement) {
                    
                    $current=[
                        'id'=>$attachement->getId(),
                        'label'=>$attachement->getLabel(),
                        'attachment'=>$attachement->getAttachment()
                    ];
                    // dd($current);

                    array_push($attachemnts,$current);

                

                    # code...
                }
                    $row=[
                        'id'=>$data->getId(),
                        'name'=>$data->getName(),
                        'label'=>$data->getLabel(),
                        'format'=>$data->getFormat()."",
                        'coverageLocation'=>$data->getCoverageLocation(),
                        'coverageSex'=>$data->getCoverageSex(),
        
                       
                        'size'=>$data->getSize(),
                        'summary'=>$data->getSummary(),
                        
                        'codeBook'=>$data->getCodeBook(),
                        'codeBookFileName'=>$data->getCodeBookFileName(),
                        'disagregationLevel'=>$data->getDisagregationLevel(),
                        'keywords'=>$data->getKeywords(),
                        'recommended'=>$data->getRecommended(),
                        'timePeriodCoverageEnd'=>$data->getTimePeriodCoverageEnd(),
                        'treatment'=>$data->getTreatment(),
                        'timePeriodCoverageStart'=>$data->getTimePeriodCoverageStart(),
                        'publicationYear'=>$data->getPublicationYear(),
                        'sugestedCitation'=>$data->getSugestedCitation(),
                        'otherIdType'=>$data->getOtherIdType(),
                        'description'=>$data->getDescription(),
                        'recievedDate'=>$data->getRecievedDate(),
                        'catalogCompletedDate'=>$data->getCatalogCompletedDate(),
                        'numberOfUnits'=>$data->getNumberOfUnits(),
                        'confidentiality'=>$data->getConfidentiality()."",
                        'dataType'=>$data->getDataType()."",
                        'studyDesign'=>$data->getStudyDesign()."",
                        'coverageType'=>$data->getCoverageType()."",
                        'datasetCategory'=>$data->getDatasetCategory()."",
                        'demographicGroup'=>$data->getDemographicGroup()."",
                        'geospatial'=>$data->getGeospatial()."",
                        'microdataTabulationStatus'=>$data->getMicrodataTabulationStatus()."",
                        'publicationStatus'=>$data->getPublicationStatus()."",
                        'publisher'=>$data->getPublisher()."",
                        'FileUrl'=>$data->getFileUrl()."",
                        'Status'=>$data->getStatus()."",
                        'downloadCount'=>$data->getDownloadCount()."",
                        'type'=>"dataset",
                        'attachements'=>$attachemnts
                       ];
                       array_push($datasets,$row);
            
               
                }
                // dd($reponse);
                // return $reponse;


                $response=[
                    'status'=>$status,
                    'data'=>$datasets,
                ];
                return new JsonResponse($response);
            }else{
                $status="error";
                $response=[
                    'status'=>$status,
                    'message'=>'no record found',
                ];
                return new JsonResponse($response);
            }
            // return new JsonResponse($allworkUnits);
        }
     

      
       
    }
    /**
     * @Route("/fetchanouncement/{last_seen}", name="fetchanouncement" )
     */
    public function announcements($last_seen,MobileService $mobileservice)
    {
        # code...
        $resposnse=[];
        // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();
        $data=$mobileservice->getNews($last_seen);
        $resposnse['status']='success';
        $resposnse['data']=$data;
        return new JsonResponse($resposnse);
    }
     /**
     * @Route("/fetchhistory/{user_id}/{last_seen}", name="fetchhistory" )
     */
    public function history($user_id,$last_seen,MobileService $mobileservice)
    {
        # code...
        $resposnse=[];
        // return View::create($student, Response::HTTP_CREATED);
        // return $this->repo->findById();
        $data=$mobileservice->getNews($last_seen);
        $resposnse['status']='success';
        $resposnse['data']=$data;
        return new JsonResponse($resposnse);
    }
     /**
     * Retrieves an Article resource
     * @Route("/student/{regnum}")
     */
    // public function findByRegistrationNumber(String $regnum)
    // {
    //     $student=$this->repo->findByRegNum(0);

    //     // $regnum = $request->get('reg_num'); 
    //     if(!$regnum){
    //         $jsonData['status']='error';
    //         $jsonData['message']="Registration Number Cant Be Empty";
    //         // return new JsonResponse($jsonData);
    //         return View::create($jsonData, Response::HTTP_BAD_GATEWAY);
    //     }
       
    //     $students = $this->repo->findByRegNum($regnum) ; 
    //     if(!$students){
            
    //             $jsonData['status']='error';
    //             $jsonData['message']="No Student With This Registration Number";
                 
    //             return View::create($jsonData, Response::HTTP_OK);
    //         // return new JsonResponse($jsonData); 
    //     }
      
    
    //     foreach ($students as $key => $student) {
    //         # code...
    //         $campusdata=$student->getStudCampus();
    //         $campusDesc=array();
    //         $campusFocus=array();
    //         $campAnouncement=array();
    //         $campusname=($student->getStudCampus())?$student->getStudCampus()->getName():"-";
    //         $campus=$student->getStudCampus();
    //         if($campus){
    //             $descarray=$campus->getDescription();
        
    //             if(count($descarray)){
                    
    //                 foreach ($descarray as $key => $desc) {
    //                     # code...
    //                     $campusDesc=array(
    //                         'description'=>$desc->getBody(),
    //                         'latitude'=>$desc->getLatitude(),
    //                         'longitude'=>$desc->getLongitude(),
    //                         'image_loc'=>$desc->getImage(),
                           
    //                     )
    //                     ;
    //                     break;
    //                 }  
    //             }
    //             $focusArray=$campus->getFocusAreas();
        
    //             if(count($focusArray)){
                 
    //                 foreach ($focusArray as $key => $focus) {
    //                     # code...
    //                     $current=array(
    //                         'id'=>$focus->getId(),
    //                         'name'=>$focus->getName(),
                            
    //                         'description'=>$focus->getDescription(),
    //                         'latitude'=>$focus->getLatitude(),
    //                         'longitude'=>$focus->getLongitude(),
    //                         'image_loc'=>$focus->getImageLocation(),
    //                     )
    //                     ;
    //                    array_push($campusFocus,$current);
    //                 }  
    //             }
    //             $announcements=$campus->getAnnouncements();
    //             $path="uploads/anounc_image/";
    //             if(count($announcements)){
                 
    //                 foreach ($announcements as $key => $announcement) {
    //                     # code...
    //                     $current=array(
    //                         'id'=>$announcement->getId(),
    //                         'title'=>$announcement->getTitle(),
                            
    //                         'body'=>$announcement->getBody(),
    //                         'post_at'=>$announcement->getPostAt(),
    //                         'image_loc'=>$path.$announcement->getImageLocation(),
                           
    //                     )
    //                     ;
    //                    array_push($campAnouncement,$current);
    //                 }  
    //             }
    //         }
    //         $path="uploads/stud_profile/";
    //         $status='Success';
    //         $data = array(
    //                 'name' => $student->getFullName(),  
    //                 'registrationNumber' => $student->getRegistrationNumber(),     
    //                 'sex' => $student->getSex(),  
                   
    //                 'field' => ($student->getStudField())?$student->getStudField()->getName():"-", 
                   
    //                 'campus' =>$campusname , 
                    
    //                 'dorm_block' =>($campusname!="-")? $student->getDormblock():"-",  
    //                 'dorm' =>($campusname!="-")? $student->getDorm():"-",  
    //                 'class_block' =>($campusname!="-")? $student->getRoommblock():"-",  
    //                 'class_num' =>($campusname!="-")? $student->getClass():"-",  
    //                 'profile_img' =>$path.$student->getImageLocation(),  
    //                 'campus_disc'=>$campusDesc,
    //                 'focus_area'=>$campusFocus,
    //                 'announcements'=>$campAnouncement

    //             );   
    //             $campus=
    //             $response=array(
    //                 'status'=>$status,
    //                 'data'=>$data
    //             );
    //             // $jsonData  
    //             return View::create($response, Response::HTTP_CREATED);
    //         // return new JsonResponse($jsonData); 

    //     } 
        // $jsonData  
  
    // return new JsonResponse($jsonData);




    //     return View::create($jsonData, Response::HTTP_CREATED);
    //     // return $this->repo->findById();
        
    // }
    /**
     * @Route("/upload_prof/{reg_num}", name="upload_prof" )
     */
    // public function post_profile(Request $request, String $reg_num)
    // {
    // //    $reg_num= $request->query->get('reg_num');
    // //    $reg_num= $request->request->get('reg_num');
    //     $students=$this->repo->findByRegNum($reg_num);
    //     $stud=null;
    //     foreach ($students as $key => $student) {
    //         # code...
    //         $stud=$student;
    //         break;
    //     }


    //     // $data = $this->getRequest()->request->all();
    //     $location_image = $request->files->get('img');
    //     // $location_image = $form['image']->getData();

    //     if ($location_image) {
    //      $originalFilename = pathinfo($location_image->getClientOriginalName(), PATHINFO_FILENAME);
    //      // this is needed to safely include the file name as part of the URL
    //      $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
    //      $newFilename = $safeFilename.'-'.uniqid().'.'.$location_image->guessExtension();

    //      // Move the file to the directory where brochures are stored
    //      try {
    //          $location_image->move(
    //              $this->getParameter('stud_profile_uploads_directory'),
    //              $newFilename
    //          );
    //          if($stud){
    //             $path="uploads/stud_profile/";
    //             $jsonData['status']='success';
    //             $jsonData['image_loc']=$path.$newFilename;
    //             $stud->setImageLocation($newFilename);
    //             $manager=$this->getDoctrine()->getManager();
    //             $manager->persist($stud);
    //             $manager->flush();
    //             return View::create($jsonData, Response::HTTP_OK);
    //          }else{
    //              //registration is not correct
    //              $jsonData['status']='error';
    //              $jsonData['message']="Admission number is not found";
                  
    //              return View::create($jsonData, Response::HTTP_OK);
                 
    //          }

                       
             
    //      } catch (FileException $e) {
    //          // ... handle exception if something happens during file upload
    //          $jsonData['status']='error';
    //          $jsonData['message']=$e;
              
    //          return View::create($jsonData, Response::HTTP_OK);
    //      }

    //      // updates the 'brochureFilename' property to store the PDF file name
    //      // instead of its contents
        

        
    // }else{
    //     $jsonData['status']='error';
    //     $jsonData['message']="Image not sent";
         
    //     return View::create($jsonData, Response::HTTP_OK);
    // }
       
    //     // return $this->repo->findById();
        
    // }
}
