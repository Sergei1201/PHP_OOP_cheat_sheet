<?php
/* Extended class from the Person class */

require_once('Person.php');

class Student extends Person
{
    // Properties
    private $specialization;

    // Public methods
    public function __construct(string $firstName, string $lastName, string $age, string $specialization)
    {
        // Calling the parent constructor
        parent::__construct($firstName, $lastName, $age);
        $this->specialization = $specialization;
    }
    public function getSpecialization(): string
    {
        return $this->specialization;
    }
}