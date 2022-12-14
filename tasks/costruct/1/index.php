<?php

require_once('classes/Human.php');

$human = new Human('Дима', 25, 1000);

echo 'Произведение возраста и зарплаты: ' . $human->age * $human->getSalary();