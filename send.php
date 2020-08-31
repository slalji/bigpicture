<?php
if ($_POST){
    //Sanitize input data using PHP filter_var().
	$user_name		= filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
	$user_email		= filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
	//$secret	= filter_var($_POST["mysecret"], FILTER_SANITIZE_STRING);	
	$message		= filter_var($_POST["user_msg"], FILTER_SANITIZE_STRING);
        $message = $message." \r\nFrom: ".$user_name."\r\nEmail: ".$user_email;
	
    
$to      = ' natasha.campbell@ubc.ca, louisega@mail.ubc.ca';
//$to      = 'sallalji@mail.ubc.ca';
$from   = $user_email;
$subject = 'from emphasis website '.$user_name;
//$message = $_POST['user_msg'];
$headers = 'From: Emphasis Study <mail@emphasis.core.ubc.ca>' . "\r\n" .
    'Reply-To: no-reply' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
$headerRep  = "From: Emphasis Study <mail@emphasis.core.ubc.ca>". "\r\n" .
    'Reply-To: no-reply' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
            $subjectRep =   "Your message was received, thank you";
            $messageRep =   "Thank you for emailing EMPHASIS study. We shall contact you soon.";
            mail($user_email, $subjectRep, $messageRep, $headerRep);
            header('location:success.php');
}
 else {
    header('location:err.php')  ;  
}
?>