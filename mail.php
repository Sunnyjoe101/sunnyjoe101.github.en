<?php
$to      = 'nobody@gmail.com';
$subject = 'Crpto Testing';
$message = 'hello';
$headers = 'From: Crypto' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
