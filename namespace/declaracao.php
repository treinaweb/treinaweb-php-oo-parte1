<?php

require_once "../src/Email/Envio.php";
require_once "../src/SMS/Envio.php";

$email = new \App\Email\Envio;
$sms = new \App\SMS\Envio;

echo \App\Email\VERSAO . "<br>";

\App\Email\validar("elton.fonseca@treinaweb.com.br");

var_dump($email, $sms);