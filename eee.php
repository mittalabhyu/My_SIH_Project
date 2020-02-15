<?php
require_once('PHPMailer/PHPMailerAutoload.php');
$mail=new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure ='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTMl();
$mail->Username='abhyudayamittal123@gmail.com';
$mail->Password='Abhyudaya@1';
$mail->SetFrom('no-reply@poshanAbhiyaan');
$mail->Subject='Hello World';
$mail->Body='Test';
$mail->AddAddress('mittalabhyudaya@gmail.com');
$mail->Send();
?>