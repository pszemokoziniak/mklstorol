<?php

// Load the SwiftMailer files  
require_once('/includes/PHPMailer/PHPMailerAutoload.php');
$config = parse_ini_file('/includes/dompdf/config.ini'); 

$query =  "SELECT pass
FROM mkl_config
WHERE id = 1
";
 $result = db_query($query);

 while ($row = $result->fetch_assoc()) { 
   $pass = $row['pass'];
 }


$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'serwer1551306.home.pl';  // Specify main and backup server
//$mail->SMTPDebug  = 1;
$mail->Port       = 465;
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = $config['usermail'];                            // SMTP username
$mail->Password = $pass;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'crmsystem@mkl.pl';
$mail->FromName = 'CRM MklBAU';
$mail->addAddress($addAddress);  // Add a recipient
///$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('', 'No-repley');
// $mail->addCC('krzysztof.kielczykowski@mkl.pl', 'Krzysztof Kielczykowski');
// $mail->addCC('damian.rzeznik@mkl.pl', 'Damian Rzeźnik');

///$mail->addCC('michal@rentflat.pl', 'Michal Rzeźnik');


///$mail->addBCC('pszemo.koziniak@gmail.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
// $mail->addAttachment($file_to_save);         // Add attachments

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
$mail->Body = $htmlText;


///$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

///echo '<br />Potw. En wysłane - '.$wiersz['tag'];	

?>  