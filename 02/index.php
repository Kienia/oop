<?php

require_once('classes/Car.php');

//Создали первый обьект класса Product
$car1 = new Product();

//Если свойство определено как public, можем добавлять значение при создании обьекта.
$car1->color = 'Red';
$car1->brand = 'Volvo';

//Переопределение свойств (Только с модификатором Public)
$car1->speed = 200;


//Создали второй обьект класса Product
$car2 = new Product();

//Определили и переопределили свойства
$car2->color = 'Green';
$car2->wheels = 3;
$car2->speed = 500;
$car2->brand = 'Audi';

//Добавление свойств на лету которых нет в классе (НЕ РЕКОМЕНДУЕТСЯ!!!)
$car2->year = 2017;


//Простой вариант вывода информации на страницу
echo "<h2>Информация по авто</h2>
Цвет: {$car2->color} <br>
Кол-во колес: {$car2->wheels} <br>
Скорость:{$car2->speed} <br>
Марка:{$car2->brand} <br> 
Год выпуска:{$car2->year}
";


