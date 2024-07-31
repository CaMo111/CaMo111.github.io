<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true; 

// using gmails smtp server port 587, name = smtp.gmail.com

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// changee these to clients future
$mail-> Username = "nathanculshaw2@gmail.com";
$mail->Password = "Nath2004";

$mail->setFrom($email,$name);
$mail->addAddress("nathanculshaw2@gmail.com", "Nato");

$mail->Subject = $subject;
$mail->Body = $message;

$mail->send();

echo "email sent";