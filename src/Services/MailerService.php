<?php

namespace App\Services;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Transport\Smtp\SmtpTransport;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class MailerService
{

    public function sendEmail(MailerInterface $mailer, $message,  $receiver1, $receiver2/*, $receiver3*/)
    {


        $email = (new Email())
            ->from('ndmcdatashare@gmail.com')
            ->to($receiver1, $receiver2/*, $receiver3*/)
            //->cc('ferid.bedru@gmail.com','ferid2.bedru@gmail.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('EPHI Research tracking system notification')
            //->text('My first message');
            ->html($message);


            try {
                $mailer->send($email);
            } catch (Exception $e) {
               return new Response('<html><body><p>Connection Problem</b></body></html>');
            }




       //  return new Response('<html><body>Email sent successfully1</body></html>');

    }
}
