<?php

   $to = "support@sana-consulting.in";
   $subject = "New Customer Submission Form";
   $message = "A new Submission from customer has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["mail"] . "\n";
   $message .= "Phone: " . $_POST["mobile"] . "\n";
   $message .= "Job Type: " . $_POST["type"] . "\n";
   $message .= "Location: " . $_POST["loc"];;
   $headers = "From: website@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>