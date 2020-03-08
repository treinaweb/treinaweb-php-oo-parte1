<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Cliente("Elton", "119999999", 28);

$cli->cpf = "777.777.777.00";
$cli->rg = '11.111.111.0';

echo $cli->cidade;

$cli->alterar('Elton Fonseca', 29);

$cli(false);

var_dump($cli);