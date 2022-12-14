<?php
require_once 'classes/Human.php';

$human1 = new Human();
$human1->name = 'Иван';
$human1->age = 25;
$human1->salary = 1000;


$human2 = new Human();
$human2->name = 'Вася';
$human2->age = 26;
$human2->salary = 2000;


echo 'Сумма зарплат: ' . $human1->salary + $human2->salary . '<br>';
echo 'Сумма Возрастов: ' . $human1->age + $human2->age . '<br>';

