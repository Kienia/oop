<?php
require_once '../includes/debug.php';
require_once 'classes/Car.php';

//Создали обьект класса Car
$car1 = new Car();

//Определили свойства обьекта
$car1->color = 'Blue';
$car1->brand = 'Lada';
$car1->year = 1588;

//Вызвали метод getCarInfo у объекта $car1
debug($car1->getCarInfo());