<?php

error_reporting(-1);
ini_set('display_errors', 'On');

$headers = "From: \"" . $mailsender_name . "\" <" . $mailsender_address . ">\r\n";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

ob_start();
require '../../assets/emailtmp.php';
$message = ob_get_clean();
$message = wordwrap($message, 70, "\r\n");

mail($to, $subject, $message, $headers);