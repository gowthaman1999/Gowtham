<?php

   $to = "support@sana-consulting.in";
   $subject = "New Submission Form Recived";
   $message = "A new Submission from customer has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["mail"] . "\n";
   $message .= "Phone: " . $_POST["phone"] . "\n";
   $message .= "Subject: " . $_POST["subject"] . "\n";
   $message .= "Message: " . $_POST["message"];;
   $headers = "From: website@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>