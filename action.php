<?php
$to      = 'dilum.harshana123@gmail.com';
$subject = 'NEW ORDER PLACEMENT';
$name = 'fname';
$message = 'code';
$phone = 'phoneno';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 