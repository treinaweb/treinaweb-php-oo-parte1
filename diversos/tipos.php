<?php

declare(strict_types=1);

require_once "src/Classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "123123123123";
$fornecedor->nomeFantasia = "Meu Armazem";
$fornecedor->razaoSocial = "Meu armazem ltda";

$fornecedor->autorizar(new Class {
    public $nome = "joao";
    public $senha = "123456";
});

var_dump($fornecedor);