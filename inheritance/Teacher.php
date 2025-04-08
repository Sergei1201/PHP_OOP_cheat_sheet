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

    // Destructor metho
    public function __destruct()
    {
        echo 'The object ' . get_class($this) . ' has been destroyed' . PHP_EOL;
    }

    // String representation on a Teacher object
    public function __toString(): string
    {
        return "Information on the object: {$this->firstName}, {$this->lastName}, {$this->age}, {$this->email}, {$this->course}";
    }

    // Method overriding (dynamic polymorphism)
    public function getFullInfo(): string
    {
        return $this->firstName . ' ' . $this->lastName . ' ' . strval($this->age) . ' ' . $this->email . ' ' . $this->course;
    }

    // Add a new student to that particular teacher using dependency injection
    public function addStudent(Student $student): void
    {

        // Add a new student to the students array
        array_push($this->students, $student);
    }

    // Get an array of students for a certain teacher
    public function getStudents(): array
    {
        return $this->students;
    }
}