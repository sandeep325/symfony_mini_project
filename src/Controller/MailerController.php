<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    #[Route('/sendEmail', name: 'mail')]
    public function sendEmail(MailerInterface $mailer): Response
    {

        $email = (new Email())
        ->from('negisandeep9819@gmail.com')
        ->to('negisandeep9819@gmail.com')
        ->subject('This mail by sandeep')
        ->text('mail form symfony 5.4 version');
        $mailer->send($email);
        // return $this->render('mailer/index.html.twig', [
        //     'controller_name' => 'MailerController',
        // ]);
    return new Response('email sent..');
    }
}
