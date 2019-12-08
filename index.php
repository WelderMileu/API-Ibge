<?php

require_once "vendor/autoload.php";

use Classes\Search\Ibge; # Não esta reconhecendo o nosso namespace

$c = new Ibge();
$result = $c->getUf("35");

echo "<pre>";
var_dump($result);
echo "</pre>";

?>