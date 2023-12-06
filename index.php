<?php

require_once('vendor/autoload.php');

$uwurandom = new Breadtf\Uwurandom\uwurandom();

$uwu = $uwurandom -> generate(500);

echo $uwu;

?>