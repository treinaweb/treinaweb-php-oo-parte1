<?php

require_once "../autoload/autoload-psr4.php";
// require_once "../src/Email/Envio.php";
// require_once "../src/Classes/Cliente.php";
// require_once "../src/Email/Transporte.php";
// require_once "../src/Email/Adaptadores\Mailgun\Adaptador.php";

$email = new \App\Email\Envio;

$email->enviar();

var_dump($email);

