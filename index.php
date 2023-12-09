<?php

#require_once('vendor/autoload.php');

# uhhh sure lets do this instead cuz above wont work
# thanks php
require_once("src/uwurandom.php");

$uwurandom = new Breadtf\Uwurandom\uwurandom();



$uwu = $uwurandom -> generate(500);

echo "\n\n" . $uwu . "\n\n";
echo strlen($uwu);


$uwusoftmax = $uwurandom -> generate(500, true);

echo "\n\n" . $uwusoftmax . "\n\n";
echo strlen($uwusoftmax);
?>
