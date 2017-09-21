<?php

// Debugging tools. Only turn these on in your development environment.

//error_reporting(-1);
//ini_set('display_errors', 'On');
//set_error_handler("var_dump");

// Special mail settings that can make mail less likely to be considered spam
// and offers logging in case of technical difficulties.

ini_set("mail.log", "/tmp/mail.log");
ini_set("mail.add_x_header", TRUE);

//variables
$name = strip_tags(htmlspecialchars($_POST['Name']));
$email_address = strip_tags(htmlspecialchars($_POST['Email']));
$message = strip_tags(htmlspecialchars($_POST['Message']));
   
// Create the email and send the message
$to = 'construct-sp@telenet.be'; 
$email_subject = "Contact van:  $name";
$email_body = "U heeft een nieuw bericht ontvangen van $name.\n\n"."Hier zijn de details:\n\nNaam: $name\n\nEmail: $email_address\n\nBericht:\n$message";
$headers = "From: noreply@constructsp.be\n";
$headers .= "Reply-To: $email_address"; 
/* 
$headers = "Content-Type: text/html; charset=UTF-8"; //Do you see "chinese" in your email? Add this if your language is  supported by the Unicode Standard. Also make sure to replace any php \n with <br> Find if your language is supported at: http://www.unicode.org/standard/supported.html
*/

if(mail($to,$email_subject,$email_body,$headers)){ echo "Mail gestuurd!";} else{ echo "Error, bekijk de logs."; }
return true; 