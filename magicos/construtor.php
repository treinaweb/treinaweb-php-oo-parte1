<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Cliente("Elton", "119999999", 28);

$cli->cpf = "777.777.777.00";
$cli->rg = '11.111.111.0';

echo $cli->cidade;

$cli->alterar('Elton Fonseca', 29);

$cli(false);

$cliSerializado = serialize($cli);

echo "<br>" . $cliSerializado;

$cli2 = unserialize($cliSerializado);

echo "<br>" . $cli;

var_dump($cli, $cli2);