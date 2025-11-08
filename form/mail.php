<?php

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($subject,$body,$email,$name, $html = false){
    // settings of server 
$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 465;
$phpmailer->Username = 'danielordonezarango@gmail.com';
$phpmailer->Password = 'gbavfqpxkbzsnomr';


//setting destinations
    $phpmailer->setFrom($email, $name);
    $phpmailer->addAddress($email, $name); 

//definiendo el contenido 
$phpmailer->isHTML($html);
$phpmailer->Subject = $subject;
$phpmailer->Body = $body;

// enviar el email
$phpmailer->send();

};
?>