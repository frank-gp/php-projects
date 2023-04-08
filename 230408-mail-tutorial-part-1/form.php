<?php
$form_name = $_POST["form_name"];
$form_email = $_POST["form_email"];
$form_message = $_POST["form_message"];

$message_mail = "Name: $form_name \nEmail: $form_email \nMesssage: $form_message";

mail("fgp555@gmail.com", "Contact Form 123", $message_mail, "From: contac@fgp.one");

echo "Message Sent";

?>