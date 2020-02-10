<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$prod2 = new Produto;
$prod2->titulo = "Skol";
$prod2->descricao = "Cerveja Pilsen";
$prod2->preco = 2.50;

var_dump($prod1 == $prod2); //tipo e propriedades !=
var_dump($prod1 === $prod2); //Referência !== 

$prod3 = new Produto;
$prod3->titulo = "Skol Litrão";
$prod3->descricao = "Cerveja Pilsen";
$prod3->preco = 2.50;

var_dump($prod1 == $prod3);

$prod4 = $prod1;

var_dump($prod1 === $prod4);

