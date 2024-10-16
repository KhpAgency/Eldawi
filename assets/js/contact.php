<?php
  $to = 'info@eldawisons.com' . "\r\n";
  $subject = $_POST['subject'];
  $name = $_POST['name'];
  $email = $_POST['email'];
   $message = $_POST['message'];

  $message = "************************************************** \r\n" .
  	         "Message from eldawi website!  \r\n" .
             "************************************************** \r\n" .

  	        "Name: " . $name . "\r\n" .
  	        "E-mail: " . $email . "\r\n" .
  	        "Message: " . $message. "\r\n";

  $headers = "From: " . $name . "<" . $email . "> \r\n" .
  	         "Reply-To: " . $email . "\r\n" .
             "MIME-Version: 1.0" . "\r\n" .
             "Content-type:text/html;charset=UTF-8" . "\r\n";

	mail($to, $subject, $message, $headers);
 ?>