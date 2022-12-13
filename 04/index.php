<?php
require_once '../includes/debug.php';
require_once 'classes/Car.php';

//Создали первый объект
$car1 = new Car('Красный', 4, 200, 'Audi', 1998);
echo($car1->getCarInfo());

//Создали второй объект
$car2 = new Car('Зеленый', 2, 100, 'Mazda', 1992);
echo($car2->getCarInfo());

//Вызвали метод разрыва класса
$car2->getLorem();