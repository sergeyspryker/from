<?php

require __DIR__.'/vendor/autoload.php';

use Randomizer\Randomizer;

echo "Random string: ";

$r = new Randomizer();
echo($r->randomString('hey', 'hi', 'test') . PHP_EOL);

$bVal = $r->randomBool();

echo "Random Bool: ";
echo $bVal === false ? 'false' : 'true' . PHP_EOL;

//t