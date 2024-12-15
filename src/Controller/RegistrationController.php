<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use App\Entity\FosUser;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\SignupRequest;
use App\Entity\UserInfo;
use DateTime;
use Doctrine\ORM\EntityManager;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use App\Form\RegistrationFormType;
use App\Form\RegistrationFormTypeAdmin;
use App\Repository\ConfigRepository;
use App\Repository\EmailMessageRepository;
use App\Repository\FosUserRepository;
use App\Repository\SignupRequestRepository;
use App\Repository\SiteRepository;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use App\Services\MailerService;





/**
 * @Route("/register")
 */
class RegistrationController extends AbstractController
{
    private $eventDispatcher;
    private $userManager;
    private $tokenStorage;

    public function __construct(EventDispatcherInterface $eventDispatcher, UserManagerInterface $userManager, TokenStorageInterface $tokenStorage)
    {
        $this->eventDispatcher = $eventDispatcher;


        $this->userManager = $userManager;
        $this->tokenStorage = $tokenStorage;
    }

    /**
     * @Route("/", name="fos_user_registration_register")
     */
    public function registerAction(Request $request,MailerInterface $mailer ,FosUserRepository $fosUserRepository,MailerService $mservice,ConfigRepository $configRepository, EmailMessageRepository $emailMessageRepository)
    {
        $user = new FosUser;
        $config=$configRepository->findAll();
        if($config){
            $config=$config[0];

            if(!$config->getUserCanRegister()){
                return $this->redirectToRoute('main');
            }
            $user->setUserGroup($config->getDefaultGroup());
        }

        $user->setEnabled(false);
        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        $form = $this->createForm(RegistrationFormType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
              //  $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);

              if($fosUserRepository->findOneBy(["email"=>$user->getEmail()])){
                $this->addFlash('warning',"Email already used.");

            }
            elseif($fosUserRepository->findOneBy(["username"=>$user->getUsername()])){
                $this->addFlash('warning',"Username already used.");
            }
            else{

                $userInfo=new UserInfo();
                $signupRequest=new SignupRequest();
                $signupRequest->setStatus(null);
                $signupRequest->setUser($user);
                $signupRequest->setSeen(false);
                $userInfo->setUser($user);
                $userInfo->setFirstName($user->getFirstName());
                $userInfo->setMiddleName($user->getMiddleName());
                $userInfo->setLastName($user->getLastName());
                $userInfo->setAddress($user->getaddress());
                $userInfo->setSex($user->getSex());
                $userInfo->setPhone($user->getPhone());
                $userInfo->setRegistrationDate(new DateTime());
                $userInfo->setAffiliation($user->getAffiliation());
                $signupRequest->setName($userInfo->getName());
                $this->userManager->updateUser($user);
                $em= $this->getDoctrine()->getManager();
                $em->persist($userInfo);
                $em->persist($signupRequest);
                $em->flush();
                $this->addFlash('success',"You have registered successfully, ");


                $append_msg=",
                Thank you for your interest in the EPHI RTDMS. We have received your membership application and it is currently being checked by our administrators if you fulfill the application criteria. As this has to be done manually please bear with us. Your application should be reviewed within a maximum of 3 working days.
                You will receive an e-mail informing you on the application outcome explaining the next steps.
                We look forward to welcoming you as an EPHI RDTS member and an active participant to the online platform very soon!
                Yours sincerely,
                RTDMS Administration Team";
                if($emailMessageRepository->findOneBy(['id'=>1])){

                    $append_msg= $emailMessageRepository->findOneBy(['id'=>1])->getMessage();
                }

                $message="Dear ".$userInfo->getName().$append_msg;
              $mservice->sendEmail($mailer,$message,$user->getEmail(),"ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);

                if (null === $response = $event->getResponse()) {

                    $url = $this->generateUrl('fos_user_registration_confirmed');

                    $response = new RedirectResponse($url);
                }
               // $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
                return $response;
            }
            }

            $event = new FormEvent($form, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('FOSUser/Registration/register.html.twig', array(
            'form' => $form->createView(),
        ));
    }




    /**
     * @Route("/admin/adduser", name="fos_user_registration_admin")
     */
    public function registerActionn(Request $request)
    {

        dd("Fghftgh");
        $user = $this->userManager->createUser();
        $user->setEnabled(true);
        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);
        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        $form = $this->createForm(RegistrationFormTypeAdmin::class,$user);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
                $this->userManager->updateUser($user);
                $userInfo=new UserInfo();
                $userInfo->setUser($user);

                $userInfo->setName($user->getFullName());
                $userInfo->setRegistrationDate(new DateTime());
                $em= $this->getDoctrine()->getManager();
                $em->persist($userInfo);
                $em->flush();


                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }

                $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }

            $event = new FormEvent($form, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_FAILURE, $event);

            if (null !== $response = $event->getResponse()) {
                return $response;
            }
        }

        return $this->render('admin/add_user.html.twig', array(
            'form' => $form->createView(),
        ));
    }




    /**
     * @Route("/check-email", name="fos_user_registration_check_email")
     */

    public function checkEmailAction(Request $request)
    {
        $email = $request->getSession()->get('fos_user_send_confirmation_email/email');

        if (empty($email)) {
            return new RedirectResponse($this->generateUrl('fos_user_registration_register'));
        }

        $request->getSession()->remove('fos_user_send_confirmation_email/email');
        $user = $this->userManager->findUserByEmail($email);

        if (null === $user) {
            return new RedirectResponse($this->container->get('router')->generate('fos_user_security_login'));
        }

        return $this->render('FOSUser/Registration/check_email.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * @Route("/confirm/{token}", name="fos_user_registration_confirm")
     */
    public function confirmAction(Request $request, $token,SignupRequestRepository $signupRequestRepository)
    {
        $userManager = $this->userManager;
        $user = $signupRequestRepository->findOneBy(['token'=>$token])->getUser();

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);

        $userManager->updateUser($user);
        if (null === $response = $event->getResponse()) {
            $url = $this->generateUrl('fos_user_registration_confirmed');
            $response = new RedirectResponse($url);
        }
        $this->eventDispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }

    /**
     * @Route("/confirmed", name="fos_user_registration_confirmed")
     */
    public function confirmedAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        return $this->render('FOSUser/Registration/confirmed.html.twig', array(
            'user' => $user,
            'targetUrl' => $this->getTargetUrlFromSession($request->getSession()),
        ));
    }

    /**
     * @return string|null
     */
    private function getTargetUrlFromSession(SessionInterface $session)
    {
        $key = sprintf('_security.%s.target_path', $this->tokenStorage->getToken()->getProviderKey());

        if ($session->has($key)) {
            return $session->get($key);
        }

        return null;
    }
}
