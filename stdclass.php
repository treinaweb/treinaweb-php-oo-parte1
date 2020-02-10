<?php

$generica = new stdClass;

$generica->nome = "Treinaweb";
$generica->curso = "PHP OO";

var_dump($generica);

$array = [
    "nome" => "Treinaweb",
    "curso" => "PHP OO"
];

$objeto = (object) $array;

var_dump($objeto);



