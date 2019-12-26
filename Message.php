<?php

$name= $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$emailTo = 'amir.timurziv06@gmail.com';
$body = "$name \n\n$email\n\n$message";
$headers = "Content-Type: text/plain; charset=utf-8\r\n". 'From:  Mysite <'.emailTo.'>' . "\r\n" . 'Reply-To:mail($emailTo, $name, $body, $headers);
$emailSent = true;
?>