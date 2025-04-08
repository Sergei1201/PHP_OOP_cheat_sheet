<?php

/* Inheritance */

declare(strict_types=1);

require_once 'Person.php';
require_once 'Student.php';
require_once 'Teacher.php';

// Instantiate a new Person object from the Person class
$person1 = new Person('John', 'Doe', 35, 'john@gmail.com');
echo $person1 . PHP_EOL;
echo $person1->getName() . PHP_EOL;

// Instantiate a new Student object from the Student class
$student1 = new Student('Jane', 'Doe', 25, 'jane@gmail.com', 'Web development');
$student2 = new Student('Jim', 'Smith', 29, 'jim@gmail.com', 'System programming');
$student3 = new Student('John', 'Smith', 45, 'smith@gmail.com', 'Linux');
echo $student1->getName() . PHP_EOL;
echo $student2->getName() . PHP_EOL;
echo $student1->getFullInfo() . PHP_EOL;
echo $student2->getFullInfo() . PHP_EOL;

// Instantiate a new Teacher object from the Teacher class
$teacher1 = new Teacher('Betsy', 'Johnson', 29, 'betsy@gmail.com', 'MySQL databases');
echo $teacher1->getFullInfo() . PHP_EOL;
echo $teacher1 . PHP_EOL;
echo $student1 . PHP_EOL;
echo $student2 . PHP_EOL;
$teacher1->addStudent($student1);
$teacher1->addStudent($student2);
$teachers1Students = $teacher1->getStudents();

// Loop through the array of the students and display their information, thus showing dynamic polymorphism in PHP
foreach ($teachers1Students as $student) {
    echo $student->getFullInfo() . PHP_EOL;
}