<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

foreach ($prod1 as $nome => $valor) {
    echo "$nome: $valor";
    echo "<br>";
}
