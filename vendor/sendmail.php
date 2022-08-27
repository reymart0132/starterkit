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
<p>Greetings of peace!</p>
<p>You have successfully applied for the $stype.</p>
<p>Please take note of your scholarship reference number <b>$tn</b>.</p>
<p>You may check the status of your scholarship using our scholarship status checker at the CEU OUR Portal.</p>
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
     $mail->Password   = 'jgjlnpbvworttwgn';                                //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom('rcbolasoc@ceu.edu.ph');       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = 'Entrance Scholarship Application Received -'.$tn;
     $mail->Body    = $body;             //content

     $mail->send();
     echo "message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    //header
