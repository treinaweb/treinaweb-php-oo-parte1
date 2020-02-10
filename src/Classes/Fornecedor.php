<?php

class Fornecedor 
{
    public const PAIS = "Brasil";

    public $razaoSocial;

    public $nomeFantasia;

    public $cnpj;

    public function autorizar($usuario)
    {
        if ($usuario->nome == "joao" && $usuario->senha == "123456") {
            echo "<br> Autorizado";
        } else {
            echo "<br> Bloqueado";
        }
    }
}