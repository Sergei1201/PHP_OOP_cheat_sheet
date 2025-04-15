<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    include $class . '.php';
});

// Instantiate a new Mercedes object from the Mercedes class
$ford1 = new Ford('Ford Focus', '600', '1996', 'white', true);
echo $ford1->getFullInfo() . PHP_EOL;
echo $ford1->startCar() . PHP_EOL;
echo $ford1->stopCar() . PHP_EOL;
$ford2 = new Ford('Ford Focus II', '500', '2009', 'black', false);

// Instantiate a new Garage object from the Garage class
$garage1 = new Garage('Test Garage', 500.2, 1000);
echo $garage1 . PHP_EOL;

$garage1->addCarToGarage($ford1);
$garage1->addCarToGarage($ford2);

$carsInGarage = $garage1->getCarsFromGarage();
foreach ($carsInGarage as $car) {
    echo $car->getFullInfo() . PHP_EOL;
}




