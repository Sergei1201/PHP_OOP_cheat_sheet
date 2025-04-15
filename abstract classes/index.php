<?php

declare(strict_types=1);

spl_autoload_register(function (string $class): void {
    include $class . '.php';
});

// Instantiate a new Fprd object from the Ford class
$ford1 = new Ford('Ford Focus', '600', '1996', 'white', true);
echo $ford1->getFullInfo() . PHP_EOL;
echo $ford1->startCar() . PHP_EOL;
echo $ford1->stopCar() . PHP_EOL;
$ford2 = new Ford('Ford Focus II', '500', '2009', 'black', false);

// Instantiate a new Mercedes object from the Mercedes class
$mercedes1 = new Mercedes('Mercedes benz', '200', '2021', 'blue', true);

// Instantiate a new Garage object from the Garage class
$garage1 = new Garage('Test Garage', 500.2, 1000);
echo $garage1 . PHP_EOL;

$garage1->addCarToGarage($ford1);
$garage1->addCarToGarage($ford2);
$garage1->addCarToGarage($mercedes1);

$spliced_array = $garage1->removeCarFromGarage(1);
print_r($spliced_array);
$carsInGarage = $garage1->getCarsFromGarage();
foreach ($carsInGarage as $car) {
    echo $car->getFullInfo() . PHP_EOL;
}

