<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport\Smtp\SmtpTransport;
use Symfony\Component\Routing\Annotation\Route;
use App\Services\MailerService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Forms;


class MailerController extends AbstractController
{
    /**
     * @Route("/email")
     */
    public function sendEmail(MailerInterface $mailer ,MailerService $mservice)
    {
        
        //$mservice->sendEmail($mailer, "tadesseamsalu@gmail.com", "tadesseamsalu@gmail.com");

       //  $this->addFlash('success', 'Email sent successfully');

       return new Response('<html><body>Email sent successfully</body></html>');
    }
}