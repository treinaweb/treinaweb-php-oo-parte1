<?php

namespace App\Email;

const VERSAO = 1.0;

class Envio 
{
    public function enviar(): void
    {
        $adaptador = new Adaptadores\Mailgun\Adaptador;

        $transporte = new Transporte;

        var_dump($adaptador, $transporte);
    }
}

function validar(string $email): void
{
    echo "O endereco $email e valido";
}