<?php

require_once('/phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];

$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;
$mail->Username = 'tomiris.birthday@mail.ru';
$mail->Password = 'Blahblahblah777';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('tomiris.birthday@mail.ru');
$mail->addAddress('adil.mids@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'Заявка с тестового сайта';
$mail->Body    = '' .$name . ' и снова пожелание! Еще раз поздравляем ';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>
