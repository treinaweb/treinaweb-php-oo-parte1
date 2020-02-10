<?php

class Cliente
{
    public $nome;

    public $idade;

    public $endereco;

    public $telefone;

    public function comprar()
    {
        echo "O cliente {$this->nome} realizou uma compra";
    }

    public function definirNome($nome)
    {
        $this->nome = $nome;
    }
}



