<?php

require_once "../src/Email/Envio.php";
require_once "../src/SMS/Envio.php";

use App\Email\Envio as Email;
use App\SMS\Envio as SMS;
use const App\Email\VERSAO;
use function App\Email\validar;

$email = new Email;
$sms = new SMS;

echo VERSAO . "<br>";

validar("elton.fonseca@treinaweb.com.br");

var_dump($email, $sms);