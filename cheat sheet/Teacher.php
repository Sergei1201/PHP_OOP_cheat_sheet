<?php

require_once('Person.php');

/* Extended class from the Person class */
class Teacher extends Person
{

    // Properties
    private $subject;

    // Public methods
    public function __construct(string $firstName, string $lastName, string $age, string $subject)
    {
        // Calling the parent constructor
        parent::__construct($firstName, $lastName, $age);
        $this->subject = $subject;
    }
    public function getSubject(): string
    {
        return $this->subject;
    }
}