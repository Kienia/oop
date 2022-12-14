<?php
require_once('classes/Human.php');

$human1 = new Human();
$human1->setName('Иван');
$human1->setAge(25);
$human1->setSalary(1000);

$human2 = new Human();
$human2->setName('Вася');
$human2->setAge(26);
$human2->setSalary(2000);

echo 'Сумма зарплат: ' . $human1->getSalary() + $human2->getSalary() . '<br>';
echo 'Сумма возрастов: ' . $human1->getAge() + $human2->getAge() . '<br>';
