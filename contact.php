<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messsage = $_POST['message'];

$email_from = 'cove.net';
$email_subject ='new message from cove.net'
$email_body = "Name: $name.\n".
             "Email: $email.\n".
             "Subject: $subject.\n."
             "Message: $message.\n";
$to ="covenet.jackson@gmail.com";
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email\r\n";

mail($to,$email_subject,$email_body,$headers);
             
?>
