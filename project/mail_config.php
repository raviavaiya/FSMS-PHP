<!-- mszt cdmm ddnu adre -->
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer();
try {
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPSecure = 'tls';
  $mail->SMTPAuth = true;
  $mail->Port = 587;
  $mail->Host = 'smtp.gmail.com';
  $mail->Username = '21bmiit007@gmail.com'; // enter your mail address
  $mail->Password = 'digo tilz kcyz pzuv'; // enter your email password
  $mail->setFrom('21bmiit007@gmail.com', 'Footwear Shop Management System'); // Set sender of the mail
  $otp = rand(100000, 999999);

  // Send the OTP to the user's email
  $subject = " Registration Code";
  $message = "<h3>Footwear Shop Management System</h3><br><b>Your Registration OTP $otp</b>";
  $_SESSION['otp'] = $otp;
  $mail->addAddress("$email");
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = " Hello  there, $message";
  $mail->AltBody = 'Body in plain text for non-HTML mail clients';
  $mail->send();
} catch (Exception $e) {
  $e->getMessage();
}
?>