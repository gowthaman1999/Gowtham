<?php

   $to = "alusteelindustries@gmail.com";
   $subject = "New Quotes From Website";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["email"] . "\n";
   $message .= "Phone: " . $_POST["phone"] . "\n";
   $message .= "Subject: " . $_POST["sub"] . "\n";
   $message .= "Message: " . $_POST["message"];
   $headers = "From: website@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: page-contact.html");

?>