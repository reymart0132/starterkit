<?php
if(isset($open) && $open){
  //do what it is supposed to do
}
else {
  header("HTTP/1.1 403 Forbidden");
  exit;
}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'autoload.php';
$mail = new PHPMailer(true);

$body ="<p>Dear $fullname ,</p>
<p>Greetings of peace and congratulations!</p>
<p>Your application for scholarship with reference number of <b>$tn</b> is now approved.</p>
<p>You may now download your scholarship form by putting your reference number in the OUR scholarship status checker located at  www.ceumnlregistrar.com </p>
<p>Your name is now also displayed on our bulletin board located at www.ceumnlregistrar.com </p>
<p>Please contact the accounting department for your account adjustments.</p>
<p><b>This is an auto generated email please do not reply.</b></p>
<p>Thank you and stay safe.</p>";




try {
    //Server settings
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;
     $mail->isSMTP();
     $mail->Host       = 'smtp.gmail.com';     //platform
     $mail->SMTPAuth   = true;
     $mail->Username   = 'ceuscholarships@gmail.com';   //email
     $mail->Password   = 'jgjlnpbvworttwgn';                     //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom('rcbolasoc@ceu.edu.ph');       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = 'Scholarship/Grant Application has been approved -'.$tn;
     $mail->Body    = $body;             //content

     $mail->send();
     echo "message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    //header
