<?php

require_once 'classes/Car.php';

//Обращаемся к статическому методу без создания обьекта (Обращаться можно только к статическим свойствам и методам)
//Счетчик: 0 (значение по умолчанию)
Product::$countCar;
echo Product::getCount();

//Счетчик увеличился на 1
$car1 = new Product();
echo Product::getCount();

//Счетчик увеличился еще на 1
$car2 = new Product();
echo Product::getCount();

//Некоторые методы можно вызывать статически (!НЕ РЕКОМЕНДУЕТСЯ!)
//Работает до PHP 7 c ошибкой DEPRECATED с PHP 7.4 - удалено
//$car2::test();

//Вызываем метод с константами
echo $car2->getPrototypeInfo();

// К константам можно обратится через имя класса как и к статическим свойствам
echo Product::TEST_CAR_SPEED;

//Использование встроенной константы class
echo Product::class;