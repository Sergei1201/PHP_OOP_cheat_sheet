<?php

spl_autoload_register(function (string $class): void {
    include $class . '.php';
});

// Instantiate a new Mercedes object from the Mercedes class
$ford1 = new Ford('Ford Focus', '600', '1996', 'white', true);
echo $ford1->getFullInfo() . PHP_EOL;
echo $ford1->startCar() . PHP_EOL;
echo $ford1->stopCar() . PHP_EOL;


