<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->SMTPSecure = 'ssl';
    $mail->Username = '2021petlove@gmail.com'; //SMTP username
    $mail->Password = '20210527'; //SMTP password
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 465; //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    $mail->CharSet = 'utf-8'; //設定郵件編碼

    //Recipients
    $mail->setFrom('2021petlove@gmail.com', '賣家派樂說您好');
    $mail->addAddress('orange3130873@gmail.com', '買家惇惇'); //Add a recipient
    $mail->addAddress('nicole99618@gmail.com', '買家');
    $mail->addAddress('s0935612090@gmail.com', '買家曼慢');
    $mail->addAddress('cpg.recruithr@gmail.com', '買家嘉 ');
    $mail->addAddress('4105028019@smail.nchu.edu.tw', '買家');
    $mail->addAddress('chu0.7wen@gmail.com', '買家');
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = '寄送測試信';
    $mail->Body = '這是一封測試 <b>內容</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?> 
