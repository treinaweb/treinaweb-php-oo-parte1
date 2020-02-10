<?php

require_once "src/classes/Fornecedor.php";

$fornecedor = new Fornecedor;

$fornecedor->autorizar(new Class {
    public $nome = "joao";
    public $senha = "123456";
});