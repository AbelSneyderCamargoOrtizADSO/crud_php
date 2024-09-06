<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

class Mail{

    public $email;
    public $subject;
    public $mensaje;
    public $body;

    public function __construct($email, $subject, $mensaje, $body)
    {
        $this->email = $email;
        $this->subject = $subject;
        $this->mensaje = $mensaje;
        $this->body = $body;
    }

    public function send(){
        try {
            //Server settings
            $phpmailer = new PHPMailer();
            $phpmailer->isSMTP();
            $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Port = 2525;
            $phpmailer->Username = 'cfc3e2e61ceb03';
            $phpmailer->Password = '353ac49e6da121';
        
            //Recipients
            $phpmailer->setFrom($this->email, 'phpmailerer');
            $phpmailer->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            $phpmailer->addAddress('ellen@example.com');               //Name is optional
            $phpmailer->addReplyTo('info@example.com', 'Information');
            $phpmailer->addCC('cc@example.com');
            $phpmailer->addBCC('bcc@example.com');
        
            //Attachments
            $phpmailer->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $phpmailer->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
        
            //Content
            $phpmailer->isHTML(true);                                  //Set email format to HTML
            $phpmailer->Subject = $this->subject;
            $phpmailer->Body    = $this->body;
            $phpmailer->AltBody = $this->mensaje;
        
            $phpmailer->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
        }
    }
}
