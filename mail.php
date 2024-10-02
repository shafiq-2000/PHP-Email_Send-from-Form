<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true;
    $mail->Username = 'your username**'; //sent email
    $mail->Password = 'your app password**'; //password this email(app password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    //Recipients
    $mail->setFrom('abc@gmail.com', 'Shafiq'); //sent email
    $mail->addAddress('abc@gmail.com', 'Fahad'); // Receiver email

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Intern Laravel developer';
    $mail->Body = 'Hi company,I am Shafiqul Islam,Bsc in cse,Study in Bangladesh University';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message sent SuccessFully';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
