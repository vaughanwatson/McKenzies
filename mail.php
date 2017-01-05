<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dayphone = $_POST['dayphone'];
$mobilephone = $_POST['mobilephone'];
$call = $_POST['call'];
$address = $_POST['address'];
$subject = $_POST['subject'];
$enquiry = $_POST['enquiry'];
$formcontent=" From: $name \n Email: $email \n Day Phone: $dayphone \n Mobile: $mobilephone \n Call Back: $call \n Address: $address \n Subject: $subject \n Enquiry: $Enquiry";
$recipient = "enquiries@mckenzies-solicitors.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thanks for filling out the form!";
?>
