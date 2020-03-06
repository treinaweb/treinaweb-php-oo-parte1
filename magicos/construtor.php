<?php

require_once "../autoload/autoload-psr4.php";

$cli = new App\Classes\Cliente("Elton", "119999999", 28);

var_dump($cli);