<?php

require_once "vendor/autoload.php";

use Search\Ibge;

$c = new Ibge();
$result = $c->getUf("35");

echo "<pre>";
var_dump($result);
echo "</pre>";

?>