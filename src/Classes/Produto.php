<?php

namespace App\Classes;

class Produto 
{
    public const NORMA = "1050";

    public string $titulo;

    public string $descricao = "Cerveja Brasileira";

    public float $preco;

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras(): void
    {
        echo "<br>" . $this->codigoBarras;
    }
}