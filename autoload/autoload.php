<?php

function carregar(string $nomeClasse)
{
    $caminhoCompleto = __DIR__ . "/../src/Classes/$nomeClasse.php";

    if (file_exists($caminhoCompleto)) {
        require $caminhoCompleto;
    }
}

spl_autoload_register("carregar");