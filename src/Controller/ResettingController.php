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

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseNullableUserEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\Form\Type\ResettingFormType;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Util\TokenGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use App\Services\MailerService;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/resetting")
 */
class ResettingController extends Controller
{
    private $eventDispatcher;
    private $formFactory;
    private $userManager;
    private $tokenGenerator;
    private $mailer;

    /**
     * @var int
     */
    private $retryTtl;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     * @param FactoryInterface         $formFactory
     * @param UserManagerInterface     $userManager
     * @param TokenGeneratorInterface  $tokenGenerator
     * @param MailerInterface          $mailer
     * @param int                      $retryTtl
     */
    public function __construct(EventDispatcherInterface $eventDispatcher, UserManagerInterface $userManager, TokenGeneratorInterface $tokenGenerator)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->userManager = $userManager;
        $this->tokenGenerator = $tokenGenerator;

        $this->retryTtl = 7200;
    }

    /**
     * @Route("/request", name="fos_user_resetting_request")
     */
    public function requestAction()
    {

        return $this->render('FOSUser/Resetting/request.html.twig');
    }

     /**
     * @Route("/send-email", name="fos_user_resetting_send_email")
     */
    public function sendEmailAction(Request $request,MailerInterface $mailer ,MailerService $mservice)
    {

        $username = $request->request->get('username');
        //dd($this->retryTtl);
        $user = $this->userManager->findUserByUsernameOrEmail($username);

        $event = new GetResponseNullableUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }
        //dd("dfgdf");

        if (null !== $user && !$user->isPasswordRequestNonExpired($this->retryTtl) ) {

            $event = new GetResponseUserEvent($user, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_REQUEST, $event);

            if (null !== $event->getResponse()) {
                return $event->getResponse();
            }

            if (null === $user->getConfirmationToken()) {
                $user->setConfirmationToken($this->tokenGenerator->generateToken());
            }

            $event = new GetResponseUserEvent($user, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_CONFIRM, $event);

            if (null !== $event->getResponse()) {
                return $event->getResponse();
            }

           // $this->mailer->sendResettingEmailMessage($user);
          $url = $this->generateUrl('fos_user_resetting_reset', array('token' => $user->getConfirmationToken()), UrlGeneratorInterface::ABSOLUTE_URL);
            $message=" Hello ".$user->getUserInfo()->getName()."!<br>To reset your password - please visit ".$url."<br>Regards,<br>EPHI.";
        $mservice->sendEmail($mailer,$message, $user->getEmail(), "ethiopiannationaldata@gmail.com"/*, "tadesseamsalu2@gmail.com"*/);
            $user->setPasswordRequestedAt(new \DateTime());
            $this->userManager->updateUser($user);

            $event = new GetResponseUserEvent($user, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_SEND_EMAIL_COMPLETED, $event);

            if (null !== $event->getResponse()) {
                return $event->getResponse();
            }
        }

        return new RedirectResponse($this->generateUrl('fos_user_resetting_check_email', array('username' => $username)));
    }

      /**
     * @Route("/check-email", name="fos_user_resetting_check_email")
     */
    public function checkEmailAction(Request $request)
    {
        $username = $request->query->get('username');

        if (empty($username)) {
            // the user does not come from the sendEmail action
            return new RedirectResponse($this->generateUrl('fos_user_resetting_request'));
        }

        return $this->render('FOSUser/Resetting/check_email.html.twig', array(
            'tokenLifetime' => ceil($this->retryTtl / 3600),
        ));
    }

      /**
     * @Route("/reset/{token}", name="fos_user_resetting_reset")
     */
    public function resetAction(Request $request, $token)
    {
        $user = $this->userManager->findUserByConfirmationToken($token);

        if (null === $user) {
            return new RedirectResponse($this->container->get('router')->generate('fos_user_security_login'));
        }

        $event = new GetResponseUserEvent($user, $request);
        $this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_INITIALIZE, $event);

        if (null !== $event->getResponse()) {

            return $event->getResponse();
        }

        $form = $this->createForm(ResettingFormType::class,$user);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $event = new FormEvent($form, $request);
            $this->eventDispatcher->dispatch(FOSUserEvents::RESETTING_RESET_SUCCESS, $event);

            $this->userManager->updateUser($user);

            if (null === $response = $event->getResponse()) {
                $url = $this->generateUrl('user_info_index');
                $response = new RedirectResponse($url);
            }

            $this->eventDispatcher->dispatch(
                FOSUserEvents::RESETTING_RESET_COMPLETED,
                new FilterUserResponseEvent($user, $request, $response)
            );

            return $response;
        }
        return $this->render('FOSUser/Resetting/reset.html.twig', array(
            'token' => $token,
            'form' => $form->createView(),
        ));
    }
}
