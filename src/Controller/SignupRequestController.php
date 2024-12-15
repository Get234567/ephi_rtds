<?php

namespace App\Controller;

use App\Entity\SignupRequest;
use App\Form\SignupRequestType;
use App\Repository\SignupRequestRepository;
use DateTime;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\EPHISecurity;
use Symfony\Component\Mailer\MailerInterface;
//use Symfony\Component\Mime\Email;
use App\Services\MailerService;
use App\Utils\RandomStringGenerator;

/**
 * @Route("/signuprequest")
 */
class SignupRequestController extends AbstractController
{

    private $security;

    public function __construct(EPHISecurity $sec)
    {
        $this->security = $sec;
    }
    /**
     * @Route("/", name="signup_request_index", methods={"GET"})
     */
    public function index(Request $request,SignupRequestRepository $signupRequestRepository,PaginatorInterface $paginator): Response
    {

        $this->security->isAllowed($this->getUser(),"sign_r_v");
        $search=$request->query->get('search');
        $qb=$signupRequestRepository->findByStatus($search);
        // $this->security->isAllowed($this->getUser(),"action");
        $data = $paginator->paginate(
            $qb, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('signup_request/index.html.twig', [
            'signup_requests' => $data,
        ]);
    }






    /**
     * @Route("/{id}", name="signup_request_show")
     */
    public function show(SignupRequest $signupRequest,Request $request,MailerInterface $mailer ,MailerService $mservice): Response
    {
        $this->security->isAllowed($this->getUser(),"sign_r_apprv");
        if($request->request->get('approve')){
        $user=$signupRequest->getUser();
       // $user->setEnabled(true);
        $rr=new   RandomStringGenerator();
        $signupRequest->setStatus(true);
        $token=$rr->generate(20);
        $signupRequest->setToken($token);
       $link="http://".$request->server->get('HTTP_HOST').$this->generateUrl('fos_user_registration_confirm',["token"=>$token]);
        $signupRequest->setApprovedAt(new DateTime());
        $signupRequest->setApprovedby($this->getUser());
        $this->getDoctrine()->getManager()->flush();
        $message=$signupRequest->getUser()->getUserInfo()->getFirstName().", your EPHI account has been approve, you can now enable using ".$link." and explore through the application featueres";

        $mservice->sendEmail($mailer,$message, $signupRequest->getUser()->getEmail(), "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
       $this->addFlash("success","User has been approved successfully, confirmation link set to ".$user->getEmail());
        return $this->redirectToRoute("signup_request_index");
        }
        elseif($request->request->get('reject')){
            $user=$signupRequest->getUser();
            $signupRequest->setStatus(false);
            $this->getDoctrine()->getManager()->flush();
            $message=$signupRequest->getUser()->getUserInfo()->getFirstName().", your EPHI account has been rejected for some reason.";
            $mservice->sendEmail($mailer,$message, $signupRequest->getUser()->getEmail(), "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);



        return $this->redirectToRoute("signup_request_index");
            }

        return $this->render('signup_request/show.html.twig', [
            'signup_request' => $signupRequest,
        ]);
    }


    /**
     * @Route("/{id}", name="signup_request_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SignupRequest $signupRequest): Response
    {
        if ($this->isCsrfTokenValid('delete'.$signupRequest->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->remove($signupRequest);
            $entityManager->remove($signupRequest->getUser()->getUserInfo());
            $entityManager->flush();
            $entityManager->remove($signupRequest->getUser());
            $entityManager->flush();
        }

        return $this->redirectToRoute('signup_request_index');
    }

}
