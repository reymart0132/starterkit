<?php
if(isset($open) && $open){
  ob_start();
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
<p>We regret to inform you that your application for scholarship/grants with reference number of <b>$tn</b> was disapproved.</p>
<p>Due to ".$_POST[reason]." </p>
<p>Please contact the scholarship officer assigned to your campus regarding this.</p>
<p>Manila:  ceuscholarship@ceu.edu.ph <br>Malolos: kdeleon@ceu.edu.ph<br>Makati:  mjvmontano@ceu.edu.ph</p>
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
     $mail->Password   = 'jgjlnpbvworttwgn';                    //password
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port       = 587;

     //Recipients
     $mail->setFrom('rcbolasoc@ceu.edu.ph');       //sender
     $mail->addAddress($email);

     //Content
     $mail->isHTML(true);
     $mail->Subject = 'Scholarship/Grant Application has been disapproved -'.$tn;
     $mail->Body    = $body;             //content

     $mail->send();
     echo "message has been sent";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    //header
