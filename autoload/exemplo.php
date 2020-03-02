<?php

require_once "autoload.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

$cli = new Cliente;
$cli->nome = "João";
$cli->idade = 40;
$cli->endereco = "São Paulo";
$cli->telefone = '(11) XXXX-XXXX';

$fornecedor = new Fornecedor;
$fornecedor->cnpj = "123123123123";
$fornecedor->nomeFantasia = "Meu Armazem";
$fornecedor->razaoSocial = "Meu armazem ltda";

var_dump($prod1, $cli, $fornecedor);