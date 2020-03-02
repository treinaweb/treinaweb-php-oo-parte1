<?php

require_once "../src/Email/Envio.php";
require_once "../src/SMS/Envio.php";

$email = new \Email\Envio;
$sms = new \SMS\Envio;

echo \Email\VERSAO . "<br>";

\Email\validar("elton.fonseca@treinaweb.com.br");

var_dump($email, $sms);