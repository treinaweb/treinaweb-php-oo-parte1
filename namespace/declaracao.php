<?php

require_once "../src/Email/Envio.php";
require_once "../src/SMS/Envio.php";

$email = new \Email\Envio;
$sms = new \SMS\Envio;

var_dump($email, $sms);