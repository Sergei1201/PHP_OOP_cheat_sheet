<?php

abstract class Car
{
    // Constructor property promotion
    public function __construct(protected string $make, protected string $model, protected string $year, protected string $color)
    {
    }

    abstract public function startCar(): string;
    abstract public function stopCar(): string;
    abstract public function getFullInfo(): string;


}