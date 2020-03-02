<?php

require_once "../src/Email/Envio.php";
require_once "../src/SMS/Envio.php";

$email = new Email_Envio;
$sms = new SMS_Envio;

var_dump($email, $sms);