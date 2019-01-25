<?php

require __DIR__.'/../vendor/autoload.php';

use Src\CalculateNumber;

$manager = new CalculateNumber();
$result = $manager->start();

foreach ($result as $item) {
    echo $item . PHP_EOL;
}
