<?php

class Car
{
    //Определение свойств
    public $color; //Без значения по умолчанию
    public $wheels = 4; //Со значением по умолчанию
    public $speed = 180; //Со значением по умолчанию

    //Устаревшее определение свойства (PHP 4) является синонимом public
    var $brand;

    //Разрешены выражения и конкатенация  в свойствках с PHP 5.6
    public $path = __DIR__ . '/test.php';
    public $sum = 10 + 5;
}
