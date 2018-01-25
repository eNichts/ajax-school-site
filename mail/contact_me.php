<?php
require '../vendor/autoload.php';

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$from = new SendGrid\Email(null, "donotreply@ajax-notes.com");
$subject = "Website contact from a user";
$to = new SendGrid\Email(null, "lorydks891@gmail.com");
$content = new SendGrid\Content("text/plain", "Test");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body(); 
?>
