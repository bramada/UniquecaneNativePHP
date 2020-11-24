<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once "library/PHPMailer/PHPMailer.php";
require_once "library/PHPMailer/Exception.php";
require_once "library/PHPMailer/OAuth.php";
require_once "library/PHPMailer/POP3.php";
require_once "library/PHPMailer/SMTP.php";

$nama = htmlentities($_POST["nama"]);
$email = htmlentities($_POST["email"]);
$negara = htmlentities($_POST["negara"]);
$pesan = htmlentities($_POST["pesan"]);

 
	$mail = new PHPMailer;
	$mail->isSMTP(); 

	//Enable SMTP debugging. 
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;              
	//Set SMTP host name                          
	$mail->Host = 'smtp.gmail.com'; //host mail server                        
	//Set TCP port to connect to 
	$mail->Port = 587;     
	//Set the encryption mechanism to use - STARTTLS or SMTPS
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;  

	//Provide username and password     
	$mail->Username = 'rotanuniq@gmail.com';   //nama-email smtp          
	$mail->Password = 'bramada1397';           //password email smtp                              
 
	$mail->setFrom($email, $nama); //tulisan email pengirim
	
	$mail->AddReplyTo($email, $nama);
 
	$mail->addAddress('rotanuniq@gmail.com'); //email penerima
	
    $mail->isHTML(true);
	$mail->Subject = 'Customer Support'; //subject
	$mail->Body    = 
	'Name : <b>'.$nama.'</b><br>'.
	'Email : <b>'.$email.'</b><br>'.
	'Country : <b>'. $negara.'</b><hr>'.
	'<b>Message : </b><br>'.$pesan; //isi email
 
	if(!$mail->send()) 
	{
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} 
	else 
	{
	    echo 'Message sent!';
	}

?>
