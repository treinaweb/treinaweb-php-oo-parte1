<?php

class Produto 
{
    public const NORMA = "1050";

    public $titulo;

    public $descricao = "Cerveja Brasileira";

    public $preco;

    public function defineCodigoBarras($codigo)
    {
        $this->codigoBarras = $codigo;
    }

    public function acessaCodigoBarras()
    {
        echo "<br>" . $this->codigoBarras;
    }
}