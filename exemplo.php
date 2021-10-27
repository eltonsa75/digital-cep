<?php

require_once "vendor/autoload.php";

use Curso\Digitalcep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('04243000');

print_r($resultado);