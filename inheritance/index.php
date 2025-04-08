<?php

/* Inheritance */

require_once 'Person.php';
require_once 'Student.php';

// Instantiate a new Person object from the Person class
$person1 = new Person('John', 'Doe', 35, 'john@gmail.com');
echo $person1 . PHP_EOL;
echo $person1->getName() . PHP_EOL;
// Instantiate a new Student object from the Student class
$student1 = new Student('Jane', 'Doe', 25, 'jane@gmail.com', 'Web development');
$student2 = new Student('Jim', 'Smith', 29, 'jim@gmail.com', 'System programming');
echo $student1->getName() . PHP_EOL;
echo $student2->getName() . PHP_EOL;
echo $student1->getFullInfo() . PHP_EOL;
echo $student2->getFullInfo() . PHP_EOL;