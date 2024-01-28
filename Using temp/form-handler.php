<?php
$name = $_POST['name'];
$visitor_email = = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['comment'];



$email_form = 'ZED.2008.2024@THE DOMAIN NAME'

$email_subject = 'New Feedback Submission'

$email_body = "User Name: $name./n".
                "User Email: $visitor_email./n".
                "Subject: $subject./n".
                "User Message: $message./n".;

$to = 'ZED.2008.2024@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header ("Location: Contactus.html");

?>