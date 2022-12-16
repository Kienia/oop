<?php
require_once('classes/User.php');
require_once('classes/Employee.php');
require_once('classes/Student.php');
require_once ('classes/Driver.php');


// 1 Часть задачи
$employee1 = new Employee();
$employee1->setName('Иван');
$employee1->setAge(25);
$employee1->setSalary(1000);

$employee2 = new Employee();
$employee2->setName('Вася');
$employee2->setAge(26);
$employee2->setSalary(2000);

echo 'Сумма зарплат Ивана и Васи: ' . $employee1->getSalary() + $employee2->getSalary() . '<br>';

// 2 Часть задачи
$student1 = new Student();
$student1->setName('Леша');
$student1->setAge(20);
$student1->setScholarship(100);
$student1->setCourse(3);

echo 'Информация по студенту:' . '<br>';
echo 'Имя: ' . $student1->getName() . '<br>';
echo 'Возраст: ' . $student1->getAge() . '<br>';
echo 'Стипендия: ' . $student1->getScholarship() . '<br>';
echo 'Курс учебы: ' . $student1->getCourse() . '<br>';

// 3 Часть задачи
$driver1 = new Driver('5');
$driver1->setName('Вадим');
$driver1->setAge(25);
$driver1->setSalary(5000);
$driver1->setCategory('c');

echo 'Информация по водителю:' . '<br>';
echo 'Имя: ' . $driver1->getName() . '<br>';
echo 'Возраст: ' . $driver1->getAge() . '<br>';
echo 'Категория: ' .$driver1->getCategory() . '<br>';
echo 'Стаж вождения: ' .$driver1->getExperience() . '<br>';
