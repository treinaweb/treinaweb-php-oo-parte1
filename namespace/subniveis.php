<?php

require_once "../src/Email/Adaptadores/Mailgun/Adaptador.php";
require_once "../src/Email/Adaptadores/SES/Adaptador.php";

$mailgun = new \App\Email\Adaptadores\Mailgun\Adaptador;
$ses = new \App\Email\Adaptadores\SES\Adaptador;

var_dump($mailgun, $ses);