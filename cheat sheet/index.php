<?php
require_once('Student.php');
require_once('Teacher.php');

/* Instantiate objects from classes */
$student1 = new Student('John', 'Doe', 35, 'Programming');
var_dump($student1);
echo $student1->getFullName() . PHP_EOL;
$teacher1 = new Teacher('Jane', 'Doe', 25, 'Rocket Science');
var_dump($teacher1);
echo $teacher1->getfullName() . PHP_EOL;
echo $teacher1->getSubject() . PHP_EOL;
echo $teacher1->getAge() . PHP_EOL;
echo $student1->getSpecialization() . PHP_EOL;