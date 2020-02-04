<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Brasileira";
$prod1->preco = 2.50;

$prod2 = new Produto;
$prod2->titulo = "Itaipava";
$prod2->descricao = "Cerveja Brasileira";
$prod2->preco = 1.90;

var_dump($prod1);
var_dump($prod2);