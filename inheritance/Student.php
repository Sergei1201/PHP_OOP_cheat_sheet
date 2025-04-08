<?php

require_once 'Person.php';

class Student extends Person
{

    /* Private properties */
    private string $specialization;

    /* Public member functions (methods) */
    public function __construct(string $firstName, string $lastName, int $age, string $email, string $specialization)
    {
        // Calling the parent constructor
        parent::__construct($firstName, $lastName, $age, $email);
        $this->specialization = $specialization;

    }

    // Destructor method
    public function __destruct()
    {
        echo 'The object ' . get_class($this) . ' has been destroyed' . PHP_EOL;
    }
    /* Method overriding (dynamic polymorphism) */
    public function getFullInfo(): string
    {
        return $this->firstName . ' ' . $this->lastName . ' ' . strval($this->age) . ' ' . $this->email . ' ' . $this->specialization;
    }

}