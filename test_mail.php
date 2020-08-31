<?php
$to      = 'salma@wisecrack.ca';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: mail@emphasis.core.ubc.ca' . "\r\n" .
    'Reply-To: mail@emphasis.core.ubc.ca' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers))
	header('location:index.php');
else
	header('location:err.php');
?>