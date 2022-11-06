<?php
$name =$_POST["name"];
$visitor_email =$_POST["email"];
$subject =$_POST["subject"];
$message =$_POST["message"];


$email_from= 'mridoy031@gmail.com'
$email_subject='new form submission'

$email_body ="User Name: $name.\n".
             "User email: $email.\n".
             "subject: $subject\n".
             "User Message: $message.\n";



$to='mridoy031@gmail.com';

$headers="From:$email_from \r\n";

$headers .="Reply-TO:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: ../view/contact.php")

include("../control/playerupdateprofileprocess.php");