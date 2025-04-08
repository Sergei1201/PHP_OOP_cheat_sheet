<?php

require_once 'Person.php';

class Teacher extends Person
{
    /* Private data members (properties) */
    private string $course;
    private array $students = [];

    /* Public member functions (methods) */
    // Constructor method
    public function __construct(string $firstName, string $lastName, int $age, string $email, string $course)
    {
        // Calling the parent constructor
        parent::__construct($firstName, $lastName, $age, $email);
        $this->course = $course;
    }

    // Add a new student to that particular teacher using dependency injection
    public function addStudent(Student $student): array
    {

        // Add a new student to the students array
        array_push($this->students, $student);
        return $this->students;
    }
}