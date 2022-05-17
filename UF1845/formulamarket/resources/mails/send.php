<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require './resources/mails/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
   // $mail->SMTPDebug = 2; 
    $file = file_get_contents('./resources/mails/user_email.json');
    $array = json_decode($file,true);
    echo($array['email']."<br>".$array['password']. "<br>");
    $mail->Host       = "smtp.gmail.com";     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $array['email'];                     //SMTP username
    $mail->Password   = $array['password'];                               //SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($array['email']);
    $mail->addAddress($address);     //Add a recipient
    //$mail->SMTPKeepAlive = true;
    // $mail->Mailer = "smtp"; 
    
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de cambio de contraseña en tu cuenta de Formula market';
    $mail->Body    = '
    Has pedido una nueva contraseña para tu cuenta en <b> Formula Market </b>. <br>
    Por favor, haz click en el siguiente boton para acceder a la pagina web.<br>
    <button style="background-color:#3384C8;height:5em;width:5em;color:white"><a style="text-decoration:none; color:white; font-size: 1.2em" href="http://www.formulamarket.com/token?token='.$token.'">Haz click aqui</a></button> <br>
    El link será valido durante los próximos 5 mins de haber solicitado el cambio de contraseña.
    ';;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
        sleep(2);
        header('Location: index.php');
    }
   

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}