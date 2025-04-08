<?php
/* Person class */

class Person
{

    // Properties
    protected $firstName;
    protected $lastName;
    protected $age;

    // Public methods
    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getfullName(): string
    {
        return $this->firstName . " " . $this->lastName;
    }
    public function getAge(): int
    {
        return $this->age;
    }

}

