<?php

require __DIR__.'/vendor/autoload.php';

use Randomizer\Randomizer;

echo "Random string: ";

$r = new Randomizer();
echo($r->randomString('hey', 'hi', 'test') . PHP_EOL);

$r->randomBool();
