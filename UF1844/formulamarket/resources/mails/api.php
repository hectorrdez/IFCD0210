<?php

/********************************************************** 
creamos una cuenta temporal en: https://yopmail.com/
crear cuenta en mailjet.com
hay que validar la cuenta activadola con un email que nos mandan
***********************************************************/

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require './vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
//API ec61b36f321f2b1cfb864b4b50eba798
//CLAVE 087d8ac9bfa991d3f648b44d0a3e17a9

    $mail->isSMTP();
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    $mail->Host = 'in-v3.mailjet.com'; // host
    $mail->SMTPAuth = true;
    $mail->Username = 'ec61b36f321f2b1cfb864b4b50eba798'; //API_KEY username
    $mail->Password = '087d8ac9bfa991d3f648b44d0a3e17a9'; //SECRET_KEY password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; //smtp port
    
    //$mail->setFrom('SENDER_EMAIL_ADDRESS', 'SENDER_NAME');
    $mail->setFrom('alt.r9-cf9twca@yopmail.com');
    //$mail->addAddress('RECIPIENT_EMAIL_ADDRESS', 'RECIPIENT_NAME');
    $mail->addAddress('hectorrdez@gmail.com');
  
    $mail->isHTML(true);
    $mail->Subject = 'EEEPA';
    $mail->Body    = '<b>prueba</b>';
  
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
   

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}