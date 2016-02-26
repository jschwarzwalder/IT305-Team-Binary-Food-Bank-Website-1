
<?php //PHP Mail Sender
//Requireing the phpmailer
require_once('./phpmailer/class.phpmailer.php');
require_once('./phpmailer/class.smtp.php');

//Email Sending Info
$to_name = $fName . ' ' . $mName . ' ' . $lName;
$to = $email;
$subject = 'Thank You for sponsoring the Kent Food Bank';
$mailedMessage = wordwrap($mailedMessage, 70);
$from_name = "The Kent Food Bank";
$from = "noreply@teambinary.greenrivertech.net";

//PHP mail version (default)
$mail = new PHPMailer();
$mail->FromName = $from_name;
$mail->From = $from;
$mail->AddAddress($to, $to_name);
$mail->Subject = $subject;
$mail->Body = $mailedMessage;

$result = $mail->Send();
echo $result ? 'Sent' : 'Error';

 ?>
