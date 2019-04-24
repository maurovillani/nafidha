<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

header('Content-Type: application/json');

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

include("lib/class.phpmailer.php");
include("lib/class.smtp.php");

$name = $_POST['contactname'];
$emailfrom = $_POST['contactemail'];
$message = $_POST['contactmsg'];
$verify = $_POST['verify'];


$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => '6LeAdEMUAAAAABqdhYKWc1DDmZU3irbJ8XiN1j_C', 'response' => $verify);

// use key 'http' even if you send the request to https://...
$options = array(
		'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($data)
		)
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { die("Error validation response"); }

$result = json_decode($result);
if($result->success == false) die("Error validation verify");

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.nafidha.it";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 25;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "hello@nafidha.it";
//Password to use for SMTP authentication
$mail->Password = "r@&7qN.+H&aE";
//Set who the message is to be sent from
$mail->setFrom($emailfrom, $name);
//Set an alternative reply-to address
$mail->addReplyTo($emailfrom, $name);
//Set who the message is to be sent to
$mail->addAddress('hello@nafidha.it', 'Nafidha Hello MailBox');
//Set the subject line
$mail->Subject = "A new webmail from ".$name;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Replace the plain text body with one created manually
$mail->AltBody = $message;
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
	echo json_encode(array('status' => 'error','message' => 'Mailer Error: '.$mail->ErrorInfo));
} else {
	echo json_encode(array('status' => 'ok','message' => 'Mail sent successful!'));
}
?>