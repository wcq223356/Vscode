<?php

require '../vendor/autoload.php';

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

$mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.qq.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = '2722758767@qq.com';                     // SMTP username
$mail->Password   = 'kwjazkmkbcyjdcfi';                               // SMTP password
$mail->SMTPSecure = \PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
$mail->Port       = 25;                                    // TCP port to connect to

//Recipients
$mail->setFrom('2722758767@qq.com', 'Mailer');
$mail->addAddress('2722758767@qq.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Attachments
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

// Content
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
echo 'Message has been sent';
