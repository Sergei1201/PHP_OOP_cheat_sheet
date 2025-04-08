<?php

/* Inheritance */

class Person
{
    /* Protected properties */
    protected string $firstName;
    protected string $lastName;
    protected int $age;
    protected string $email;

    /* Public methods (member functions) */
    // Constructor
    public function __construct(string $firstName, string $lastName, int $age, string $email)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
    }

    // Destructor
    public function __destruct()
    {
        echo 'The object ' . get_class($this) . ' has been destroyed' . PHP_EOL;
    }

    // String representation of an object being instantiated from the class
    public function __toString(): string
    {
        return "Information on the object: {$this->firstName}, {$this->lastName}, {$this->age}, {$this->email}";
    }

    public function getFullInfo(): string
    {
        return $this->firstName . ' ' . $this->lastName . ' ' . strval($this->age) . ' ' . $this->email;
    }

    /* Getters & Setters */
    public function setName(string $firstName, string $lastName): void
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getName(): string
    {
        return $this->firstName . ' ' . $this->lastName;

    }

}