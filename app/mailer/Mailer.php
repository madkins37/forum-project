<?php
require 'PHPMailerAutoload.php';


//$mail->SMTPDebug = 3;                               // Enable verbose debug output
function myMail($toEmailAddress, $toUserName, $messageSubject, $messageBodyHTML) {

$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'TeamPHP2016@gmail.com';                 // SMTP username
$mail->Password = 'TeamPHP2016!';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('TeamPHP2016@gmail.com', 'Team PHP');
$mail->addAddress($toEmailAddress);     // Add a recipient
$mail->addReplyTo('TeamPHP2016@gmail.com', 'Team PHP');


$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $messageSubject;
$mail->Body    = $messageBodyHTML;
$mail->AltBody = strip_tags($messageBodyHTML);


if(!$mail->send()) {
    alert ('Message could not be sent.');
    alert ('Mailer Error: ' . $mail->ErrorInfo);
    return false;
} else {
    echo 'Message has been sent';
    return true;
}




}

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}