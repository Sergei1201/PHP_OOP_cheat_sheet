<?php

include_once 'Car.php';

class Mercedes extends Car
{

    /* Private data members (properties) */
    private bool $isPremium;

    /* Public member functions (methods) */
    public function __construct(string $make, string $model, string $year, string $color, bool $isPremium)
    {
        // Calling the parent constructor
        parent::__construct($make, $model, $year, $color);
        $this->isPremium = $isPremium;

    }

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
        return 'The full information on the car is:' . PHP_EOL . ' Make: ' . $this->make . PHP_EOL . ' Model: ' . $this->model . PHP_EOL . ' Year: ' . $this->year . PHP_EOL . ' Color: ' . $this->color . PHP_EOL . ' Racing: ' . $this->isPremium;

    }

}