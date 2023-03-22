<?php

require __DIR__.'/vendor/autoload.php';

use Randomizer\Randomizer;

echo "Random ";

$r = new Randomizer();
echo($r->randomString('hey', 'hi', 'test') . PHP_EOL);

