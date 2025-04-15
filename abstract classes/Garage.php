<?php

include_once 'Car.php';
class Garage
{

    /* Private data members (properties) */
    private $carsArray = [];

    /* Constructor property promotion */
    public function __construct(private string $name, private float $size, private float $cost)
    {

    }

    /* String representation of a garage object */
    public function __toString(): string
    {
        return 'Garage: ' . PHP_EOL . ' Name: ' . $this->name . PHP_EOL . ' Size: ' . $this->size . PHP_EOL . ' Cost: ' . $this->cost;
    }

    /* Public member functions (methods) */

    // Dependency injection here (Car)
    public function addCarToGarage(Car &$car): void
    {
        array_push($this->carsArray, $car);
    }

    public function removeCarFromGarage(int $index): array
    {
        // if (count($this->carsArray) > 0 && ($index >= 0 && $index < count($this->carsArray))) {
        // unset($this->carsArray[$index]);
        return array_splice($this->carsArray, $index, 1);
        // }
    }

    public function getCarsFromGarage(): array
    {
        return $this->carsArray;
    }
}