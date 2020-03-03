<?php

namespace App\Email;

use App\Classes\Cliente;
use App\Email\Adaptadores\Mailgun\Adaptador as Mailgun;
use App\Email\Adaptadores\SES\Adaptador as SES;

const VERSAO = 1.0;

class Envio 
{
    public function enviar(): void
    {
        $adaptador = new Mailgun;

        $transporte = new Transporte;

        $obj = new \stdClass;
        $cli = new Cliente;

        \var_dump($adaptador, $transporte, $obj, $cli);

        var_dump($adaptador, $transporte, $obj, $cli);
    }

    public function m1()
    {
        $adaptador = new Mailgun;
    }

    public function m2()
    {
        $adaptador = new SES;
    }
}

function validar(string $email): void
{
    echo "O endereco $email e valido";
}