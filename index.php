<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$prod2 = new Produto;
$prod2->titulo = "Itaipava";
//$prod2->descricao = "Cerveja Brasileira";
$prod2->preco = 1.90;

var_dump($prod1);
var_dump($prod2);

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = '(11) XXXX-XXXX';

$cli->comprar();

$nomeClasse = "Produto";

$instancia = new $nomeClasse;
var_dump($instancia);

$cli2 = new $cli;

$nomeClasse2 = get_class($cli);
$cli3 = new $nomeClasse2;
$cli3->nome = "Maria";

var_dump($cli);
var_dump($cli2);
var_dump($cli3);
