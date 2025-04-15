<?php

use Dom\CharacterData;

include_once 'Methods.php';

class Ford extends Car
{
    private bool $isRacing;
    public function __construct(string $make, string $model, string $year, string $color, bool $isRacing = false)
    {
        // Calling the parent constructor of the abstract Car class
        parent::__construct($make, $model, $year, $color);
        $this->isRacing = $isRacing;
    }

    /* Implementing abstract methods of the parent class */
    public function startCar(): string
    {
        return 'Starting ' . get_class($this) . ' car';

    }
    public function stopCar(): string
    {
        return 'Stopping ' . get_class($this) . ' car';

    }
    public function getFullInfo(): string
    {
        return 'The full information on the car is:' . PHP_EOL . ' Make: ' . $this->make . PHP_EOL . ' Model: ' . $this->model . PHP_EOL . ' Year: ' . $this->year . PHP_EOL . ' Color: ' . $this->color . PHP_EOL . ' Racing: ' . $this->isRacing;

    }
}