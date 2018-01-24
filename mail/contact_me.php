<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
<<<<<<< HEAD
=======

$from = new SendGrid\Email(null, $email_address);
$subject = "Website contact from: $name";
$to = new SendGrid\Email(null, "lorydks891@gmail.com");
$content = new SendGrid\Content("text/plain", "You have received a new message from your website contact form.\n\nHere are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('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');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();
<<<<<<< HEAD
>>>>>>> parent of 3b2f424... .gitignore change
=======
>>>>>>> parent of 3b2f424... .gitignore change
   
// Create the email and send the message
$to = 'lorydks891@gmail.com';
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@ajaxnotes.com\n"; // This is the email address the generated message will be from
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
