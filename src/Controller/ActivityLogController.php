<?php

namespace App\Controller;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\ActivityLog;
use App\Repository\StudyRepository;
use App\Entity\Study;
use App\Entity\Dataset;
use App\Entity\Feedback;
use App\Repository\FeedbackRepository;
use App\Repository\ActivityLogRepository;
use App\Repository\SignupRequestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Services\MailerService;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport\Smtp\SmtpTransport;

use DateTime;




/**
 * @Route("/activitylog")
 */
class ActivityLogController extends AbstractController
{




     /**
     * @Route("/feedback_seen", name="feedback_seen")
     */
    public function fedbackSeen(Request $request):Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $repo=$entityManager->getRepository(Feedback::class);

        $feedbackObjects=$repo->findBy(['seen' => 0]);

         foreach ($feedbackObjects as $feedbackObj)
         {
             $feedbackObj->setSeen(1);
         }

        $entityManager->flush();
        return $this->redirectToRoute('home');
    }

     /**
     * @Route("/feedback_show", name="feedback_show", methods={"GET"})
     */
    public function fedbackShow(FeedbackRepository $FeedbackRepository,Request $request):Response
    {

        $arr=new JsonResponse($FeedbackRepository->countBySeen(0));
        return $arr;
    }

     /**
     * @Route("/update_message", name="update_message", methods={"GET"})
     */
    public function updatemessages(ActivityLogRepository $activityLogRepository,Request $request):Response
    {

        return new JsonResponse($activityLogRepository->countnotification());
    }

     /**
     * @Route("/update_user_request", name="update_user_request", methods={"GET"})
     */
    public function updateSignupRequest(SignupRequestRepository $signupRepository,Request $request)
    {
        return new JsonResponse($signupRepository->countByStatus(NULL));
    }



    /**
     * @Route("/", name="activity_log_index", methods={"GET"})
     */
    public function index(ActivityLogRepository $activityLogRepository,Request $request,PaginatorInterface $paginator): Response
    {

    $queryBuilder = $activityLogRepository->findByStatus(0);
    $activity_logs = $paginator->paginate(
        $queryBuilder, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        10/*limit per page*/
    );

        return $this->render('activity_log/index.html.twig', [
            'activity_logs' => $activity_logs,
        ]);
    }


    /**
     * @Route("/{id}", name="activity_log_show", methods={"GET"})
     */
    public function show(ActivityLog $activityLog): Response
    {
        //isAllowed($user,'act_show');
        $study=null;
        $dataset=null;
        $study_type="Study";
        $dataset_type="Dataset";
      $entityManager = $this->getDoctrine()->getManager();
      if($activityLog->getItemType()=="Study")
      {
        $repo=$entityManager->getRepository(Study::class);
        $study=$repo->findOneBy(array('id' => $activityLog->getItemID()));
        return $this->render('activity_log/show.html.twig', [
            'activity_log' => $activityLog,
            'study' => $study,
            'type' => $study_type,
         ]);

      }
      if($activityLog->getItemType()=="Dataset")
      {
        $repo=$entityManager->getRepository(Dataset::class);
        $dataset=$repo->findOneBy(array('id' => $activityLog->getItemID()));
        return $this->render('activity_log/show.html.twig', [
            'activity_log' => $activityLog,
            'dataset' => $dataset,
            'type' => $dataset_type,
         ]);
      }




    }
     /**
     * @Route("/approve/{id}", name="approve", methods={"GET"})
     */
    public function approve(StudyRepository $studyRepository, Dataset $dataset, MailerInterface $mailer ,MailerService $mservice,ActivityLogRepository $activityLogRepository,Request $request,PaginatorInterface $paginator)
    {
        $dataset->setApproved(1);
        $activityLogs = $activityLogRepository->findBy(['ItemID'=>$dataset->getId()]);
        // $activityLog->setStatus(1);
        // $activityLog->setApprovedDate(new DateTime());
        // $activityLog->setApprovedBy($this->getUser());
        $activityLog=null;


         foreach( $activityLogs as  $activityLog0)
         {
             $activityLog0->setStatus(1);
             $activityLog0->setApprovedDate(new DateTime());
             $activityLog0->setApprovedBy($this->getUser());
             $activityLog = $activityLog0;

         }




    $this->addFlash('success',"Requet Approved Succesfully");
    $task="download";

    if($activityLog->getRequestType()=="Upload")
    {
        $task="upload";


    }
    if($activityLog->getRequestType()=="create")
    {
        $task="create";
        $study = $studyRepository->findOneBy(['id'=>$activityLog->getItemID()]);
        $study->setStatus(1);

    }
    $this->getDoctrine()->getManager()->flush();
    $message=$activityLog->getApprovedBy()->getUserInfo()->getName()." has approved ".$activityLog->getSender()->getUserInfo()->getName()
    ."'s file ".$task." request on ".$activityLog->getApprovedDate()->format('Y-m-d H:i:s');

    $mservice->sendEmail($mailer,$message, "ethiopiannationaldata@gmail.com", "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
    return $this->redirectToRoute('activity_log_index');

    }

    /**
     * @Route("/reject/{id}", name="reject", methods={"GET","POST"})
     */
    public function reject(Dataset $dataset, MailerInterface $mailer ,MailerService $mservice,ActivityLogRepository $activityLogRepository,Request $request,PaginatorInterface $paginator)
    {

        $activityLogs = $activityLogRepository->findBy(['ItemID'=>$dataset->getId()]);
        $dataset->setApproved(-1);


        $activityLog=null;


        foreach( $activityLogs as  $activityLog0)
        {
            $activityLog0->setStatus(-1);
            $activityLog0->setApprovedDate(new DateTime());
            $activityLog0->setApprovedBy($this->getUser());
            $activityLog = $activityLog0;

        }



        $remark=$request->request->get('remark');
        $activityLog->setStatus(-1);
        $activityLog->setRemark($remark);

       // $activityLog->setApprovedDate(new DateTime());

      //  $activityLog->setApprovedBy($this->getUser());
        $this->getDoctrine()->getManager()->flush();
        $this->addFlash('success',"Requet Rejected successfully");
        $task="download";

        if($activityLog->getRequestType()=="Upload")
        {
            $task="upload";
        }
         $message=$activityLog->getApprovedBy()->getFirstName()." has rejected ".$activityLog->getSender()->getFirstName()
         ."'s file ".$task." request on ".$activityLog->getApprovedDate()->format('Y-m-d H:i:s'). "<br> <b>Remark:</b> ".$remark;

        $mservice->sendEmail($mailer,$message, "ethiopiannationaldata@gmail.com", "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
        return $this->redirectToRoute('activity_log_index');


    }


    /**
     * @Route("/{id}", name="activity_log_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ActivityLog $activityLog): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activityLog->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($activityLog);
            $entityManager->flush();
        }

        return $this->redirectToRoute('activity_log_index');
    }

    /**
     * @Route("approve1/{id}", name="activity_log_approval")
     */

   // | replace({'?':"/"})

     public function ApproveReject(Request $request, ActivityLog $activityLog,$id)
    {
//dd($request->request->get('id'));
  $entityManager = $this->getDoctrine()->getManager();
  $repo=$entityManager->getRepository(ActivityLog::class);

  $req=$repo->findOneBy(['id',$request->request->get('id')]);
  $req->setStatus(1);
$entityManager->flush();
  $data = $request->getContent();
$this->addFlash('success',"Requet Approved Succesfully");

    }



}
