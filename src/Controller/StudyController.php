<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

use App\Repository\JoinStudyRepository;
use App\Entity\ActivityLog;
use App\Entity\Study;
use App\Entity\Tag;
use App\Entity\Dataset;
use App\Entity\StudyDesign;
use App\Entity\Attachment;
use App\Entity\Task;
use App\Entity\Milestone;
use App\Entity\StudyFundingSource;
use App\Entity\FundingSource;
use App\Entity\Feedback;

use App\Entity\FosUser;
use App\Entity\JoinStudy;
use App\Entity\Researcher;
use App\Entity\ResearchTeam;
use App\Entity\StudyResearcher;
use App\Form\StudyType;
use App\Form\ResearchTeamType;
use App\Form\FundingSourceType;
use App\Form\ResearcherType;
use App\Form\StudyFundingSourceType;
use App\Repository\ActivityLogRepository;
use App\Repository\DatasetRepository;
use App\Repository\FeedbackRepository;
use App\Repository\FosUserRepository;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\StudyRepository;
use App\Repository\MilestoneRepository;
use App\Repository\StudyResearcherRepository;
use App\Repository\TaskRepository;
use App\Repository\UserGroupRepository;
use App\Repository\UserPermissionRepository;
use App\Entity\StudyDatasetLinkRequest;
use App\Form\StudyDatasetLinkRequestType;
use App\Repository\EmailMessageRepository;
use App\Repository\SiteRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use App\Services\EPHISecurity;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use App\Services\MailerService;
use App\Utils\RandomStringGenerator;
use Dompdf\Dompdf;
use Dompdf\Options;
use phpDocumentor\Reflection\DocBlock\Tags\Throws;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * @Route("/study")
 */
class StudyController extends AbstractController
{

    private $security;

    public function __construct(EPHISecurity $sec)
    {
        $this->security = $sec;
    }



    /**
     * @Route("/remove/team", name="remove_team")
     */
    public function removeMember(Request $request,StudyResearcherRepository $studyResearcherRepository,StudyRepository $studyRepository,FosUserRepository $fosUserRepository)
    {

        if($request->query->get('sid') && $request->query->get('tid')){
            $study=$studyRepository->findOneBy(['id'=>$request->query->get('sid')]);
            $user=$fosUserRepository->findOneBy(['id'=>$request->query->get('tid')]);

            if($study && $user){

                $study->getOwner()->removeElement($user);

                $team=$studyResearcherRepository->findOneBy(['study'=>$study,'user'=>$user]);

                $em = $this->getDoctrine()->getManager();
                $em->remove($team);
                $em->flush();

            }
            else   $this->addFlash("danger","Error occured");

        }

        return $this->redirectToRoute('myresearch');
    }

    /**
     * @Route("/", name="study_index", methods={"GET"})
     */
    public function index(StudyRepository $studyRepository, PaginatorInterface $paginator, Request $request): Response
    {

        if ($this->security->isAllowedTwig($this->getUser(), "std_show_indx")) { } elseif ($this->security->isAllowedTwig($this->getUser(), "std_new")) {

            return $this->redirectToRoute('myresearch');
        } else {
            throw new AccessDeniedException();
        }

        $search = $request->query->get('search');
        $type = $request->query->get('type');

            switch ($type) {
                case 'Ongoing':
                    $type=1;
                    break;
                case 'Completed':
                    $type=3;
                    break;
                case 'Finished':
                    $type=4;
                    break;
                case 'Laststage':
                    $type=2;
                    break;

                default:
                $type=5;
                    break;
            }

            $queryBuilder = $studyRepository->findDataset($type,$search);
            $studies = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );

        return $this->render('study/index.html.twig', [
            'studies' => $studies,
        ]);
    }
       /**
     * @Route("/request", name="study_request")
     */
    public function studyRequest(StudyRepository $studyRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $this->security->isAllowed($this->getUser(), "std_frst_apprv");

        $search = $request->query->get('search');
            $queryBuilder = $studyRepository->findDataset(null,$search);
            $studies = $paginator->paginate(
                $queryBuilder, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                10/*limit per page*/
            );

        return $this->render('study/index.html.twig', [
            'studies' => $studies,
        ]);
    }





    /**
     * @Route("/approve", name="approve_study", methods={"GET","POST"})
     */
    public function approve_study(Request $request, StudyRepository $studyRepository,  MailerInterface $mailer, MailerService $mservice, EmailMessageRepository $emailMessageRepository)
    {

        $this->security->isAllowed($this->getUser(), "std_frst_apprv");
        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('id');
        $study = $studyRepository->findOneBy(['id' => $id]);
        $action = $request->query->get('action');
       // dd($study->getOwner()[0]);

        $owner_email = $study->getOwner()[0]->getEmail();
        $owner_name = $study->getOwner()[0]->getUserInfo()->getName();

       $append_msg= " Your request to EPHI has been approved. Now you can continue starting with milestone task entries";

        if($emailMessageRepository->findOneBy(['id'=>3])){

            $append_msg= $emailMessageRepository->findOneBy(['id'=>3])->getMessage();
        }


        $message = $owner_name .", your request to EPHI on '".$study->getTitle()."' has been rejected. <br> <b> Message: </b> ".$request->request->get('message');




        if ($action == -1) {
            $study->setStatus(-1);
            $em->flush();
            //email here..
            $mservice->sendEmail($mailer, $message, $owner_email, "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
            $this->addFlash("success", "Study has been rejected successfully, and email is sent to the researcher ");
        }
        if ($action == 1) {
            $study->setStatus(1);
            $em->flush();
            $message="Hello ".$owner_name.$append_msg;
                   $mservice->sendEmail($mailer, $message, $owner_email, "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
            $this->addFlash("success", "Study has been approved successfully, and email is sent to the researcher ");
        }




        return $this->redirectToRoute('study_index');
    }
    /**
     * @Route("/tasks_approved", name="tasks_approved", methods={"GET","POST"})
     */
    public function tasks_approved(Request $request, TaskRepository $taskRepository)
    {

        $entityManager = $this->getDoctrine()->getManager();


        $done = $request->query->get('done');
        $action = $request->query->get('action');

        $don = explode(',', $done);
        $study = null;
        foreach ($don as $d) {

            $task = $taskRepository->find($d);
            $study = $task->getStudy();
            if ($action == 'delete') {
                $entityManager->remove($task);
                $entityManager->flush();
            } else {
                $task->setDone($action);
                $entityManager->flush();
            }
        }
        $tasks = $taskRepository->findBy(['study' => $study]);
        if($tasks){
            $tasked = $taskRepository->findBy(['study' => $study, 'done' => '2']);

        if ($tasks == $tasked) {
            $study->setStatus(2);
            $entityManager->flush();
        }

    }


        return new Response(1);
    }




    /**
     * @Route("/tasks_done", name="tasks_done", methods={"GET","POST"})
     */
    public function tasks_done(Request $request)
    {

        $entityManager = $this->getDoctrine()->getManager();

        $done = $request->request->get('done');
        // $files=$request->request->get('files');

        // dump($files);
        $don = explode(',', $done);


        foreach ($don as $d) {

            $task = $entityManager->getRepository(Task::class)->find($d);
            $task->setDone(1);
            $entityManager->flush();
        }

        return new Response(1);
    }



    /**
     * @Route("/new", name="study_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $this->security->isAllowed($this->getUser(), "std_sbmt_fnshd");

        $study = new Study();
        $form = $this->createForm(StudyType::class, $study);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $study->setStatus(4);
            $study->setCreatedAt(new \DateTime());
            $study->setUpdatedAt(new \DateTime());
            $study->addOwner($this->getUser());
            $study->setCreator($this->getUser());

            $uploadedFile = $form['Proposal']->getData();
            if ($uploadedFile) {
                $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
                $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($location, $newFilename);
                $study->setResearchProposal($newFilename);
            }


            $uploadedFile = $form['clearance']->getData();
            if ($uploadedFile) {
                # code...

                $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
                $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($location, $newFilename);
                $study->setEthicalClearance($newFilename);
            }
            $entityManager->persist($study);
            $entityManager->flush();

            $this->addFlash("success", "Study created Successfully!!!");

            return $this->redirectToRoute('study_index');


        }


        else  $this->addFlash("danger", "Check Inputs, only pdf is allowed for submit");

        return $this->render('study/new.html.twig', [
            'study' => $study,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/create", name="create_study", methods={"GET","POST"})
     */
    public function create(Request $request): Response
    {

        $this->security->isAllowed($this->getUser(), "std_new");

        $study = new Study();
        $form = $this->createForm(StudyType::class, $study);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $uploadedFile = $form['Proposal']->getData();
            if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $study->setResearchProposal($newFilename);}
            $study->addOwner($this->getUser());
            $study->setCreator($this->getUser());
            $uploadedFile = $form['clearance']->getData();
            if ($uploadedFile) {
                # code...

            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $study->setEthicalClearance($newFilename);
        }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($study);
            $entityManager->flush();
            //$ActivityLog = new ActivityLog();
            //$ActivityLog->setRequestType('create');
            //$ActivityLog->setSender($this->getUser());
            //$ActivityLog->setItemId($study->getId());
            //$ActivityLog->setStatus(0);

           // $ActivityLog->setItemType('Study');
            //$ActivityLog->setSeen(false);
            //$ActivityLog->setRequestedDate(new DateTime());
            //$entityManager->persist($ActivityLog);
            //$entityManager->flush();

            $this->addFlash("success", "Study created Successfully!!! wait for approval");
            return $this->redirectToRoute('myresearch');
        }

        return $this->render('study/create.html.twig', [
            'study' => $study,
            'form' => $form->createView(),
        ]);
    }

  /**
     * @Route("/mycreate", name="create_my_study", methods={"GET","POST"})
     */
    public function mycreate(Request $request): Response
    {

        $this->security->isAllowed($this->getUser(), "std_new");

        $study = new Study();
        $form = $this->createForm(StudyType::class, $study);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $uploadedFile = $form['Proposal']->getData();
            if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $study->setResearchProposal($newFilename);}
            $study->addOwner($this->getUser());
            $study->setCreator($this->getUser());
            $uploadedFile = $form['clearance']->getData();
            if ($uploadedFile) {
                # code...

            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $study->setEthicalClearance($newFilename);
        }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($study);
            $entityManager->flush();
            //$ActivityLog = new ActivityLog();
            //$ActivityLog->setRequestType('create');
            //$ActivityLog->setSender($this->getUser());
            //$ActivityLog->setItemId($study->getId());
            //$ActivityLog->setStatus(0);

           // $ActivityLog->setItemType('Study');
            //$ActivityLog->setSeen(false);
            //$ActivityLog->setRequestedDate(new DateTime());
            //$entityManager->persist($ActivityLog);
            //$entityManager->flush();

            $this->addFlash("success", "Study created Successfully!!! wait for approval");
            return $this->redirectToRoute('myresearch');
        }

        return $this->render('study/mycreate.html.twig', [
            'study' => $study,
            'form' => $form->createView(),
        ]);
    }







    /**
     * @Route("/make_download_request", name="make_download_request_study", methods={"POST"})
     */
    public function make_request(Request $request)
    {
        $this->security->isAllowed($this->getUser(), "dnld_show_index");
        $this->security->isAllowed($this->getUser(), "dnld_mk_req");

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Dataset::class);
        $dataset = $repo->findOneBy(['id' => $request->request->get('dataset')]);
        if ($dataset) {
            $ActivityLog = new ActivityLog();
            $ActivityLog->setRequestType('Download');
            $ActivityLog->setSender($this->getUser());
            $ActivityLog->setItemId($dataset->getId());
            $ActivityLog->setStatus(0);

            $ActivityLog->setItemType('Dataset');
            $ActivityLog->setSeen(0);
            $ActivityLog->setRequestedDate(new DateTime());
            $em->persist($ActivityLog);
            $em->flush();
            $this->addFlash("success", "Request successfully send");

            return $this->redirect($this->generateUrl('dataset_show', ['id' => $dataset->getId()]));
        }
        return $this->redirectToRoute('dataset_index');
    }

    /**
     * @Route("/download", name="download_study", methods={"POST"})
     */
    public function download(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Attachment::class);
        $attachment = $repo->findOneBy(['id' => $request->request->get('attachment')]);

        $file = 'uploads/study/' . $attachment->getAttachment();
        $response = new BinaryFileResponse($file);
        $response->headers->set('Content-Type', 'text/plain');
        $ex = explode('.', $attachment->getAttachment())[1];
        $filename = $attachment->getLabel() . '.' . $ex;
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $filename
        );
        return $response;
    }
    /**
     * @Route("/attachment/{id}", name="study_attachment", methods={"GET","POST"})
     */
    public function attachment(Request $request, Study $study): Response
    {
        $studies = $this->getUser()->getStudies();


        if ($studies->contains($study)) { } else {
            $this->security->isAllowed($this->getUser(), "std_edit");
        }

        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder()
            ->add('label',TextType::class,['label'=>'Study Label'])
            ->add('File', FileType::class,['label'=>'Attachment File'])
            ->add('Add', SubmitType::class, ['attr' => ['class' => 'btn btn-primary btn-sm']])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $attachment = new Attachment();
            $data = $form->getData();
            //upload
            $uploadedFile = $form['File']->getData();
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = md5(\uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($destination, $newFilename);

            $attachment->setLabel($data['label'].'_'.explode('.',$uploadedFile->getClientOriginalName())[0]);
            $attachment->setStudy($study);
            $attachment->setAttachment($newFilename);

            $em = $this->getDoctrine()->getManager();
            $em->persist($attachment);
            $em->flush();
        }

        $repo = $em->getRepository(Attachment::class);
        $attachments = $repo->findBy(['study' => $study]);
        return $this->render('study/attachment.html.twig', [
            'attachments' => $attachments,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/add_funding_source", name="add_funding_source", methods={"GET","POST"})
     */
    public function addFundingSource(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $study = new StudyFundingSource();

        $form = $this->createForm(StudyFundingSourceType::class, $study);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            dd($form->getData());
            $em->persist($study);
            $em->flush();

            return $this->redirectToRoute('study_index');
        }
        return $this->render('datamanager/index.html.twig', [

            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("attachment/{id}/edit", name="study_attachment_edit", methods={"GET","POST"})
     */
    public function editattachment(Request $request, Attachment $attachment): Response
    {

        $em = $this->getDoctrine()->getManager();

        $form = $this->createFormBuilder()
            ->add('aid', HiddenType::class, ['data' => $attachment->getId()])
            ->add('label', TextType::class, ['data' => $attachment->getLabel()])
            ->add('File', FileType::class, ['required'   => false])
            ->add('Update', SubmitType::class, ['attr' => ['class' => 'btn btn-primary btn-sm']])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {


            $data = $form->getData();
            //upload
            $uploadedFile = $form['File']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
                $newFilename = md5(\uniqid()) . '.' . $uploadedFile->getClientOriginalExtension();
                $uploadedFile->move($destination, $newFilename);
                $attachment->setAttachment($newFilename);
            }

            // $attachment->setLabel($data['label']);
            $attachment->setLabel($data['label'].'_'.explode('.',$uploadedFile->getClientOriginalName())[0]);



            $em = $this->getDoctrine()->getManager();
            // $em->persist($attachment);
            $em->flush();

            return $this->redirect($this->generateUrl('study_attachment', ['id' => $attachment->getStudy()->getId()]));
        }


        $repo = $em->getRepository(Attachment::class);
        $attachments = $repo->findBy(['study' => $attachment->getStudy()->getId()]);
        return $this->render('study/attachment.html.twig', [
            'attachments' => $attachments,
            'form' => $form->createView()
        ]);
    }






    /**
     * @Route("/my/{id}", name="my_study_show")
     */
    public function showMy(Study $study,UserPermissionRepository $userPermissionRepository,UserGroupRepository $userGroupRepository,StudyResearcherRepository $studyResearcherRepository, Request $request,MailerInterface $mailer, MailerService $mservice,DatasetRepository $datasetRepository,FosUserRepository $fosUserRepository, FeedbackRepository $feedbackRepository, MilestoneRepository $mrepo): Response
    {

        $studies = $this->getUser()->getStudies();
            $owner=false;

        if ($studies->contains($study)) {

            $owner=true;
        } else {
            $this->security->isAllowed($this->getUser(), "std_show_dtl");
        }
        if (is_null($study->getStatus())) {




             return $this->render('study/approve.html.twig', [
                'study' => $study,
               'form'=>"",
            ]);
        }


        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Attachment::class);
        $repo2 = $em->getRepository(Feedback::class);
        $taskrepo = $em->getRepository(Task::class);

        $tasks = $taskrepo->findBy(['study' => $study]);
        if (!$tasks) {
            $isDone = false;
        } else {
            $tasked = $taskrepo->findBy(['study' => $study, 'done' => '2']);
            $isDone = $tasks == $tasked;
        }
        $mile = $mrepo->findAll();


       // if ($study->getAvaliablity() == 'public') {

            $attachments = $repo->findBy(['study' => $study]);
       // } else
         //   $attachments = null;


        $feedform = $this->createFormBuilder()
            ->add('Message', TextareaType::class)
            ->getForm();

        $feedform->handleRequest($request);
        if ($feedform->isSubmitted()  && $feedform->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $feedback = new Feedback();
            $data = $feedform->getData();
            $feedback->setMessage($data['Message']);
            $feedback->setStudy($study);
            $feedback->setSeen(0);
            $feedback->setSender($this->getUser());
            $feedback->setRecievedOn(new DateTime());
            $entityManager->persist($feedback);

            $entityManager->flush();
            return $this->redirectToRoute('my_study_show', ['id' => $study->getId()]);
        }

        $feedbacks = $repo2->findBy(['study' => $study], ['id' => 'DESC']); //->orderBy('id', 'DESC');


        //multiple actions

        $tag = new Tag();
        $tagform = $this->createFormBuilder($tag)
            ->add('name', EntityType::class, ['class' => Tag::class])
            ->getForm();






        $studydesignform = $this->createFormBuilder(null)
            ->add('name', EntityType::class, ['class' => StudyDesign::class])
            ->getForm();
            $researchteamform = $this->createFormBuilder()
            ->add('Researcher', EmailType::class)
            ->add('InvolvementType',ChoiceType::class,['choices'=>["CO-PI"=>"Co-PI","RESEARCHER"=>"RESEARCHER"]])
            ->getForm();
        $researchteamform->handleRequest($request);
        if ($researchteamform->isSubmitted() && $researchteamform->isValid()) {
           $user= $fosUserRepository->findOneBy(['email'=>$researchteamform->getData()['Researcher']]);
           if($user){
            $researcher=$studyResearcherRepository->findOneBy(["user"=>$user,"study"=>$study]);
            if($researcher){
                if($researcher->getStatus())
                $this->addFlash("danger","User already joined study");
                else {
                    $this->addFlash("danger","User already requested to join study");
                }
            }
            else {
            $js=new StudyResearcher();
            $js->setUser($user);
            $js->setStatus(false);
            $js->setStudy($study);
            $js->setInvolvement($researchteamform->getData()['InvolvementType']);
            $rand=new  RandomStringGenerator();
            $token=$rand->generate(20);
            $js->setToken($token);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($js);
            $entityManager->flush();
            $rec=$user->getUserInfo()->getName();
            $sender=$this->getUser()->getUserInfo()->getName();
            $link="<a href='http://".$request->server->get('HTTP_HOST').$this->generateUrl('study_join',['id'=>$study->getId(),"token"=>$token])."'>here</a>";
            $message="Dear ".$rec .", ".$sender." Requested you to join Study on ".$study->getTitle(). " you can click ".$link." to join study.";

            $mservice->sendEmail($mailer, $message, $user->getEmail(), "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
            $this->addFlash('success', 'Request has been sent to '.$user->getEmail()." to join this study" );
            return $this->redirectToRoute('my_study_show', ['id' => $study->getId()]);
           }

        }
           else {
            $this->addFlash('danger', 'There is no user registered with provided email');
            return $this->redirectToRoute('my_study_show', ['id' => $study->getId()]);

           }
        }
       // $researchteamform = $this->createForm(ResearcherType::class);
        // ->add('name')
        // ->getForm();


        $studydesignform->handleRequest($request);

        if ($studydesignform->isSubmitted() && $studydesignform->isValid()) { }


        //tag addded
        $tagform->handleRequest($request);

        if ($tagform->isSubmitted() && $tagform->isValid()) {

            $id = $request->request->get("datasetid");
            $name = $tagform->getData()->getName();


            $entityManager = $this->getDoctrine()->getManager();
            $enttag = $this->getDoctrine()->getRepository(Tag::class);

            $tt = $enttag->findOneBy(['name' => $name]);

            $dat = $entityManager->find('App\Entity\Dataset', $id);

            $dat->addTag($tt);

            $entityManager->persist($dat);
            $entityManager->flush();

            $this->addFlash('success', 'Tag Added Successfully!!');
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }



        //fundingsource adddddddeeeeeeeeeeeedddd
        $fso = new FundingSource();
        $fundingsourceform = $this->createForm(FundingSourceType::class, $fso);
        // ->add('name')
        // ->getForm()  ;

        $fundingsourceform->handleRequest($request);
        if ($fundingsourceform->isSubmitted() && $fundingsourceform->isValid()) {

            $id = $request->request->get("studyid");
            $name = $fundingsourceform->getData()->getName();


            $entfso = $this->getDoctrine()->getManager();
            // $entfso = $this->getDoctrine()->getRepository(FundingSource::class);


            $studyr = $entfso->find('App\Entity\Study', $id);

            // $studyr->addFundingSource($fso);

            $fso->addStudy($studyr);

            $entfso->persist($fso);
            $entfso->flush();
            return $this->redirectToRoute('my_study_show', ['id' => $study->getId()]);
        }


        //task adddddddeeeeeeeeeeeedddd


        $task = new Task();
        $taskform = $this->createFormBuilder($task)
            ->add('Name', null)
            ->add('Description', TextAreaType::class)
            ->add('milestone', EntityType::class, ['class' => Milestone::class])
            ->getForm();

            $myd=null;
            foreach ($this->getUser()->getDatasets() as $key => $value) {
               $myd[$value->getTitle()]=$value->getId();
            }


            if($this->getUser()->getDownloadRequests()){

                $approved_data=$this->getUser()->getDownloadRequests();
                // dd($approved_data);
                    foreach ($approved_data as $key => $value) {
            if(
                $value->getApprover1()==21 and
                $value->getApprover2()==21 and
                $value->getApprover3()==21
            ){
                // foreach ($value->getDataset() as $key1 => $value1) {
                    // dd($value);
                    $myd[$value->getDataset()->getTitle()]=$value->getDataset()->getId();
                //  }

                // dd($this->getUser()->getDownloadRequests());
            }
        }
        // dd($myd);
    }

        $datasetForm = $this->createFormBuilder()
            ->add('Dataset', ChoiceType::class,
            ['choices'=>$myd,

            'attr'=>[
                'class'=>'select2 col-md-10'
            ]
            ]
            )
            ->getForm();
        $datasetForm->handleRequest($request);

        if ($datasetForm->isSubmitted() && $datasetForm->isValid()) {



            $id = $datasetForm->getData()['Dataset'];
            $datasetaa=$datasetRepository->findOneBy(['id'=>$id]);
            $emm = $this->getDoctrine()->getManager();
           $study->addDataset($datasetaa);

            $emm->flush();


            $this->addFlash('success', 'Dataset Linked Successfully!!');
            return $this->redirectToRoute('my_study_show', ['id' => $study->getId()]);
        }


        $taskform->handleRequest($request);

        if ($taskform->isSubmitted() && $taskform->isValid()) {

            $id = $request->request->get("studyid");
            $name = $taskform->getData()->getName();


            $emm = $this->getDoctrine()->getManager();
            $entfso = $this->getDoctrine()->getRepository(Task::class);


            $studyr = $emm->find('App\Entity\Study', $id);

            // $studyr->addFundingSource($fso);

            $task->setStudy($studyr);
            $task->setDone(0);
            $emm->persist($task);
            $emm->flush();
            $this->addFlash('success', 'Task Added Successfully!!');
            return $this->redirectToRoute('my_study_show', ['id' => $study->getId()]);
        }

        return $this->render('study/myshow.html.twig', [
            'study' => $study,
            'attachments' => $attachments,
            'feedform' => $feedform->createView(),
            'tagform' => $tagform->createView(),
            'taskform' => $taskform->createView(),
            'researchteamform' => $researchteamform->createView(),
            'studydesignform' => $studydesignform->createView(),
            'fundingsourceform' => $fundingsourceform->createView(),
            'datasetForm' => $datasetForm->createView(),
            'feedbacks' => $feedbacks,
            'tasks' => $tasks,
            'done' => $isDone,
            'miles' => $mile,
            'datasets' => $study->getDatasets(),
        ]);
    }


     /**
     * @Route("/join", name="study_join")
     */
    public function join(StudyRepository $studyRepository, Request $request, StudyResearcherRepository $studyResearcherRepository): Response
    {

        if($request->query->get('token') && $request->query->get('id')){
            $token=$request->query->get('token');
            $id=$request->query->get('id');
            $join= $studyResearcherRepository->findOneBy(['token'=>$token]);
            $study=$join->getStudy();
            if($join){
               $study->addOwner($join->getUser());
               $join->setStatus(true);
               $join->setToken(null);
               $emm = $this->getDoctrine()->getManager();
               $emm->flush();
               return $this->redirectToRoute('my_study_show',['id'=>$study->getId()]);
            }
        }
        throw new NotFoundHttpException();



    }





    /**
     * @Route("/{id}", name="study_show")
     */
    public function show(Study $study,FosUserRepository $fosUserRepository,MailerInterface $mailer, MailerService $mservice,UserPermissionRepository $userPermissionRepository, Request $request, FeedbackRepository $feedbackRepository, MilestoneRepository $mrepo): Response
    {
        $em=$this->getDoctrine()->getManager();
        $studies = $this->getUser()->getStudies();
$owner=false;

        if ($studies->contains($study)) {
$owner=true;
         } else {
            $this->security->isAllowed($this->getUser(), "std_show_dtl");
        }
        if (is_null($study->getStatus())) {

        $perm=$userPermissionRepository->findOneBy(["name"=>"reviewer"]);
        $users=null;
        $kk=null;
        //$user=  $fosUserRepository->findBy(['userGroup'=>$perm->getUserGroups()[0]]);
       // dd($user);
       foreach ($perm->getUserGroups() as $key => $value) {
           # code...
         $user=  $fosUserRepository->findBy(['userGroup'=>$value]);
         foreach ($user as $ky => $us) {

               $users[$us->getUsername()]=$us->getId();

           }


       }






            $form=$this->createFormBuilder()
            ->add("PotentialReviewer",ChoiceType::class,
                ['choices'=>$users,])
            ->getForm();
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
               $fos=$fosUserRepository->findOneBy(["id" => $form->getData()["PotentialReviewer"]]);
                $study->setReviewer($fos);
                $study->setStatus(1);

            $em->flush();

            $message="Hello ".$study->getCreator()->getUserInfo()->getName(). " Your request on ".$study->getTitle()." study has been approved. Now you can continue starting with milestone task entries";
            $mservice->sendEmail($mailer, $message, $study->getCreator()->getEmail(), "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
            $this->addFlash("success", "Study has been approved successfully, and email is sent to the researcher ");
            return $this->redirectToRoute('myreview');
            }
            return $this->render('study/approve.html.twig', [
                'study' => $study,
                'form' => $form->createView()
            ]);
        }


        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Attachment::class);
        $repo2 = $em->getRepository(Feedback::class);
        $taskrepo = $em->getRepository(Task::class);

        $tasks = $taskrepo->findBy(['study' => $study]);
        if (!$tasks) {
            $isDone = false;
        } else {
            $tasked = $taskrepo->findBy(['study' => $study, 'done' => '2']);
            $isDone = $tasks == $tasked;
        }
        $mile = $mrepo->findAll();


       // if ($study->getAvaliablity() == 'public') {

            $attachments = $repo->findBy(['study' => $study]);
       // } else
         //   $attachments = null;


        $feedform = $this->createFormBuilder()
            ->add('Message', TextareaType::class)
            ->getForm();

        $feedform->handleRequest($request);
        if ($feedform->isSubmitted()  && $feedform->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $feedback = new Feedback();
            $data = $feedform->getData();
            $feedback->setMessage($data['Message']);
            $feedback->setStudy($study);
            $feedback->setSeen(0);
            $feedback->setSender($this->getUser());
            $feedback->setRecievedOn(new DateTime());
            $entityManager->persist($feedback);

            $entityManager->flush();
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }

        $feedbacks = $repo2->findBy(['study' => $study], ['id' => 'DESC']); //->orderBy('id', 'DESC');


        //multiple actions

        $tag = new Tag();
        $tagform = $this->createFormBuilder($tag)
            ->add('name', EntityType::class, ['class' => Tag::class])
            ->getForm();






        $studydesignform = $this->createFormBuilder(null)
            ->add('name', EntityType::class, ['class' => StudyDesign::class])
            ->getForm();




        $researchteamform = $this->createForm(ResearcherType::class);
        // ->add('name')
        // ->getForm();


        $studydesignform->handleRequest($request);

        if ($studydesignform->isSubmitted() && $studydesignform->isValid()) { }


        //tag addded
        $tagform->handleRequest($request);

        if ($tagform->isSubmitted() && $tagform->isValid()) {

            $id = $request->request->get("datasetid");
            $name = $tagform->getData()->getName();


            $entityManager = $this->getDoctrine()->getManager();
            $enttag = $this->getDoctrine()->getRepository(Tag::class);

            $tt = $enttag->findOneBy(['name' => $name]);

            $dat = $entityManager->find('App\Entity\Dataset', $id);

            $dat->addTag($tt);

            $entityManager->persist($dat);
            $entityManager->flush();

            $this->addFlash('success', 'Tag Added Successfully!!');
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }



        //fundingsource adddddddeeeeeeeeeeeedddd
        $fso = new FundingSource();
        $fundingsourceform = $this->createForm(FundingSourceType::class, $fso);
        // ->add('name')
        // ->getForm()  ;


        $fundingsourceform->handleRequest($request);

        if ($fundingsourceform->isSubmitted() && $fundingsourceform->isValid()) {

            $id = $request->request->get("studyid");
            $name = $fundingsourceform->getData()->getName();


            $entfso = $this->getDoctrine()->getManager();
            // $entfso = $this->getDoctrine()->getRepository(FundingSource::class);


            $studyr = $entfso->find('App\Entity\Study', $id);

            // $studyr->addFundingSource($fso);

            $fso->addStudy($studyr);

            $entfso->persist($fso);
            $entfso->flush();
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }


        //task adddddddeeeeeeeeeeeedddd


        $task = new Task();
        $taskform = $this->createFormBuilder($task)
            ->add('Name', null)
            ->add('Description', TextAreaType::class)
            ->add('milestone', EntityType::class, ['class' => Milestone::class])
            ->getForm();

        $taskform->handleRequest($request);

        if ($taskform->isSubmitted() && $taskform->isValid()) {

            $id = $request->request->get("studyid");
            $name = $taskform->getData()->getName();


            $emm = $this->getDoctrine()->getManager();
            $entfso = $this->getDoctrine()->getRepository(Task::class);


            $studyr = $emm->find('App\Entity\Study', $id);

            // $studyr->addFundingSource($fso);

            $task->setStudy($studyr);
            $task->setDone(0);
            $emm->persist($task);
            $emm->flush();


            $this->addFlash('success', 'Task Added Successfully!!');
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }
        $reviewer=$request->query->get('review',null);


        return $this->render('study/show.html.twig', [
            'reviewer'=>$reviewer,
            'owner'=>$owner,
            'study' => $study,
            'attachments' => $attachments,
            'feedform' => $feedform->createView(),
            'tagform' => $tagform->createView(),
            'taskform' => $taskform->createView(),
            'researchteamform' => $researchteamform->createView(),
            'studydesignform' => $studydesignform->createView(),
            'fundingsourceform' => $fundingsourceform->createView(),
            'feedbacks' => $feedbacks,
            'tasks' => $tasks,
            'done' => $isDone,

            'miles' => $mile,
        ]);
    }



     /**
     * @Route("/print/{id}", name="study_report")
     */
    public function report(Study $study, Request $request, FeedbackRepository $feedbackRepository, MilestoneRepository $mrepo): Response
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Attachment::class);
        $repo2 = $em->getRepository(Feedback::class);
        $taskrepo = $em->getRepository(Task::class);


        $attachments = $repo->findBy(['study' => $study]);
        $tasks = $taskrepo->findBy(['study' => $study]);
        $links="";
        $css = $this->getParameter('kernel.project_dir') . '/public/assets/css/bootstrap.min.css';
        $css ='<link rel="stylesheet" href="'.$css.'"/>' ;
        $links=$links.$css;
        $css = $this->getParameter('kernel.project_dir') . '/public/assets/css/ace.min.css';
        $css ='<link rel="stylesheet" href="'.$css.'"/>' ;
        $links=$links.$css;
        $css = $this->getParameter('kernel.project_dir') . '/public/assets/css/bootstrap.min.css';
        $css ='<link rel="stylesheet" href="'.$css.'"/>' ;
        $links=$links.$css;


        $html = $this->renderView('study/report.html.twig', [
            'study' => $study,
            'attachments' => $attachments,
            'tasks' => $tasks,

        ]);




        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        $dompdf = new Dompdf($pdfOptions);
       // $dompdf->set_option('isHtml5ParserEnabled', true);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();


        // Output the generated PDF to Browser (force download)
        $dompdf->stream($study->getTitle().".pdf", [
            "Attachment" => 0
        ]);



    }



    /**
     * @Route("/{id}/edit", name="study_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Study $study, ActivityLogRepository $activityLogRepository,MailerInterface $mailer, MailerService $mservice): Response
    {


        $studies = $this->getUser()->getStudies();


        if ( $study->getCreator()== $this->getUser()) {
           if($study->getStatus() == 4)
            throw new AccessDeniedException();

            if ($request->query->get('action') == 'finish') {

                $study->setStatus(3);
                              $this->getDoctrine()->getManager()->flush();

                $this->addFlash("success", "Your study has been sent for approval.");
                return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
            }
        } else {
            $this->security->isAllowed($this->getUser(), "std_edit");
        }


        if ($request->query->get('action') == 'lapprove' && $this->security->isAllowed($this->getUser(),'lst_rev')) {

            $study->setStatus(4);
            //$activity_log = $activityLogRepository->findOneBy(['ItemID' => $study->getId()]);
           // $activity_log->setStatus(1);


            $this->getDoctrine()->getManager()->flush();

            $this->addFlash("success", "Study has been approved.");
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }
        if ($request->query->get('action') == 'lpending'  && $this->security->isAllowed($this->getUser(),'lst_rev')) {
            $study->setStatus(2);
            $this->getDoctrine()->getManager()->flush();

            $owner_email = $study->getOwner()[0]->getEmail();
            $owner_name = $study->getOwner()[0]->getUserInfo()->getName();

            $message = "Dear ".$owner_name .", your approval request to EPHI on '".$study->getTitle()."' has been pended. <br> <b> Reviewer message: </b> ".$request->request->get('message');

        $mservice->sendEmail($mailer, $message, $owner_email, "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);


            $this->addFlash("success", "Study has been pended for further consideration.");
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }


        $form = $this->createForm(StudyType::class, $study);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            if ($studies->contains($study) && $study->getStatus()== -1) {
                $study->setStatus(null);
            }
            if (!$study->getTimePeriodCoverageStart() ||  $study->getTimePeriodCoverageStart()->format('Y-m-d') <= $study->getTimePeriodCoverageEnd()->format('Y-m-d')) {
                # code...

            $uploadedFile = $form['Proposal']->getData();
            if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $study->setResearchProposal($newFilename);
            if($uploadedFile->getClientOriginalExtension()!='pdf'){
                $this->addFlash("danger", "Check Inputs, only pdf is allowed for submit");
           }
        }
            $study->addOwner($this->getUser());
            $uploadedFile = $form['clearance']->getData();
            if ($uploadedFile) {
                # code...

            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            if($uploadedFile->getClientOriginalExtension()!='pdf'){
                 $this->addFlash("danger", "Check Inputs, only pdf is allowed for submit");
            }
            $uploadedFile->move($location, $newFilename);
            $study->setEthicalClearance($newFilename);
        }
        $study->setUpdatedAt(new \DateTime());

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("success", "Study has been updated successfully.");
            return $this->redirectToRoute('study_index');
        }
        else  $this->addFlash("danger", "Invalid time coverage start cannot be greater than time coverage end");
    }
    else  $this->addFlash("danger", "Check Inputs, only pdf is allowed for submit");


        return $this->render('study/edit.html.twig', [
            'study' => $study,
            'form' => $form->createView(),
        ]);
    }


 /**
     * @Route("/{id}/myedit", name="my_study_edit", methods={"GET","POST"})
     */
    public function myedit(Request $request, Study $study, ActivityLogRepository $activityLogRepository,MailerInterface $mailer, MailerService $mservice): Response
    {


        $studies = $this->getUser()->getStudies();

        if ( $study->getCreator()== $this->getUser()) {

           if($study->getStatus() == 4)
            throw new AccessDeniedException();

            if ($request->query->get('action') == 'finish') {

                $study->setStatus(3);
                              $this->getDoctrine()->getManager()->flush();

                $this->addFlash("success", "Your study has been sent for approval.");
                return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
            }
        } else {
            $this->security->isAllowed($this->getUser(), "std_edit");
        }


        if ($request->query->get('action') == 'lapprove' && $this->security->isAllowed($this->getUser(),'lst_rev')) {

            $study->setStatus(4);
            //$activity_log = $activityLogRepository->findOneBy(['ItemID' => $study->getId()]);
           // $activity_log->setStatus(1);


            $this->getDoctrine()->getManager()->flush();

            $this->addFlash("success", "Study has been approved.");
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }
        if ($request->query->get('action') == 'lpending'  && $this->security->isAllowed($this->getUser(),'lst_rev')) {
            $study->setStatus(2);
            $this->getDoctrine()->getManager()->flush();

            $owner_email = $study->getOwner()[0]->getEmail();
            $owner_name = $study->getOwner()[0]->getUserInfo()->getName();

            $message = "Dear ".$owner_name .", your approval request to EPHI on '".$study->getTitle()."' has been pended. <br> <b> Reviewer message: </b> ".$request->request->get('message');

        $mservice->sendEmail($mailer, $message, $owner_email, "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);


            $this->addFlash("success", "Study has been pended for further consideration.");
            return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
        }


        $form = $this->createForm(StudyType::class, $study);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            if ($studies->contains($study) && $study->getStatus()== -1) {
                $study->setStatus(null);
            }
            if (!$study->getTimePeriodCoverageStart() ||  $study->getTimePeriodCoverageStart()->format('Y-m-d') <= $study->getTimePeriodCoverageEnd()->format('Y-m-d')) {
                # code...

            $uploadedFile = $form['Proposal']->getData();
            if($uploadedFile){
            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($location, $newFilename);
            $study->setResearchProposal($newFilename);
            if($uploadedFile->getClientOriginalExtension()!='pdf'){
                $this->addFlash("danger", "Check Inputs, only pdf is allowed for submit");
           }
        }
            $study->addOwner($this->getUser());
            $uploadedFile = $form['clearance']->getData();
            if ($uploadedFile) {
                # code...

            $location = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            if($uploadedFile->getClientOriginalExtension()!='pdf'){
                 $this->addFlash("danger", "Check Inputs, only pdf is allowed for submit");
            }
            $uploadedFile->move($location, $newFilename);
            $study->setEthicalClearance($newFilename);
        }
        $study->setUpdatedAt(new \DateTime());

            $this->getDoctrine()->getManager()->flush();
            $this->addFlash("success", "Study has been updated successfully.");
            return $this->redirectToRoute('study_index');
        }
        else  $this->addFlash("danger", "Invalid time coverage start cannot be greater than time coverage end");
    }

        return $this->render('study/myedit.html.twig', [
            'study' => $study,
            'form' => $form->createView(),
        ]);
    }



        /**
     * @Route("/delete/{id}", name="xxx2")
     */
    public function delete44(Request $request, Study $study ,ActivityLogRepository $activityLogRepository,FeedbackRepository $feedbackRepository): Response
    {
        $this->security->isAllowed($this->getUser(), "std_del");
        if ($this->isCsrfTokenValid('delete' . $study->getId(), $request->request->get('_token'))) {


            $entityManager = $this->getDoctrine()->getManager();
            if ($study->getTasks()) {
                foreach ( $study->getTasks() as $key => $value) {
                    $entityManager->remove($value);
                }
                $entityManager->flush();
            }
            $feedbacks = $feedbackRepository->findBy(['study' => $study]);
            if ($feedbacks) {
                foreach ($feedbacks as $key => $value) {
                    $entityManager->remove($value);
                }
                $entityManager->flush();
            }

            $entityManager->remove($study);
            $entityManager->flush();
        }

        return $this->redirectToRoute('study_index');
    }


    /**
     * @Route("/delete/{id}", name="xxx")
     */
    public function delete1(Request $request, Study $study ,ActivityLogRepository $activityLogRepository,FeedbackRepository $feedbackRepository): Response
    {
        $this->security->isAllowed($this->getUser(), "std_del");
        if ($this->isCsrfTokenValid('delete' . $study->getId(), $request->request->get('_token'))) {


            $entityManager = $this->getDoctrine()->getManager();
            if ($study->getTasks()) {
                foreach ( $study->getTasks() as $key => $value) {
                    $entityManager->remove($value);
                }
                $entityManager->flush();
            }
            $feedbacks = $feedbackRepository->findBy(['study' => $study]);
            if ($feedbacks) {
                foreach ($feedbacks as $key => $value) {
                    $entityManager->remove($value);
                }
                $entityManager->flush();
            }

            $entityManager->remove($study);
            $entityManager->flush();
        }

        return $this->redirectToRoute('myresearch');
    }




    /**
     * @Route("/taskfile_upload/{id}", name="taskfile_upload", methods={"GET","POST"})
     */
    public function taskfile_upload(Request $request, Study $study)
    {
        //dd("dfghbfgchg");

        $em = $this->getDoctrine()->getManager();

        $id = $request->request->get('hiddenid');
        // $studyid=$request->request->get('hiddenstudyid');
        $uploadedFile = $request->files->get('task' . $id);
        // dd($file);
        //upload
        $task = $em->getRepository(Task::class)->find($id);
        if ($uploadedFile) {
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads/study';
            $newFilename = uniqid() . '.' . $uploadedFile->getClientOriginalExtension();
            $uploadedFile->move($destination, $newFilename);
            $task->setAttachments($newFilename);
        }
        $task->setDone(1);
        $em->flush();
        $em->clear();




        return $this->redirectToRoute('study_show', ['id' => $study->getId()]);
    }


    /**
     * @Route("/taskfile_download/{id}", name="taskfile_download", methods={"POST"})
     */
    public function taskfile_download(Request $request, Study $study)
    {
             $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(Task::class);
        $attachment = $repo->findOneBy(['id' => $request->request->get('taskattachid')]);
        if ($attachment) {
            $repod = $em->getRepository(Task::class);
            $task = $repod->findOneBy(['id' => $attachment->getId()]);
            $file = 'uploads/study/' . $task->getAttachments();
            $response = new BinaryFileResponse($file);
            $response->headers->set('Content-Type', 'text/plain');
            $ex = explode('.', $task->getAttachments())[1];
            $filename = $task->getAttachments() . '.' . $ex;
            $response->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_ATTACHMENT,
                $filename
            );

            return $response;
        }
        return $this->redirectToRoute('study_index');
    }

    /**
     * @Route("/study_dataset_link/{id}", name="study_dataset_link", methods={"GET","POST"})
     */
    public function studyDatasetLink(Request $request, Study $study, StudyRepository $studyRepo)
    {



        $studyDatasetLinkRequest = new StudyDatasetLinkRequest();
        $form = $this->createFormBuilder()
        ->add('dataset',EntityType::class,[
            'class'=>Dataset::class,
                'attr'=>[
                    'class'=>'select2',
                'placeholder'=>'--select Dataset--'
            ]
        ])
        ->add('study_id',HiddenType::class,[
        'attr'=>['value'=>$study->getId(),
            'mapped'=>false]
        ]
            )
            ->getForm()
        ;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $study=   $studyRepo->findOneBy(['id'=>$form->getData()['study_id']]);


            // dd($form->getData()['study_id']);
            $entityManager = $this->getDoctrine()->getManager();

            $studyDatasetLinkRequest->setRequestedAt(new DateTime('now'));
            $studyDatasetLinkRequest->setDataset($form->getData()['dataset']);
            $studyDatasetLinkRequest->setStudy($study);
            $studyDatasetLinkRequest->setRequester($this->getUser());
            $studyDatasetLinkRequest->setStatus(0);
            $entityManager->persist($studyDatasetLinkRequest);
            $entityManager->flush();

            return $this->redirectToRoute('myresearch',['id'=>$study->getId()]);
        }

        return $this->render('study_dataset_link_request/new.html.twig', [
            'study_dataset_link_request' => $studyDatasetLinkRequest,
            'form' => $form->createView(),
        ]);


    }




}
