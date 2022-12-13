<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand;
    public $year;

    //Обьявление метода | public - модификатор по умолчанию (!для читабельности лучше указывать явно!)
    //$this - Псевдопеременная ссылающаяся на текущий объект класса
    public function getCarInfo()
    {
        return "<h2>Информация по авто</h2>
            Цвет: {$this -> color} <br>
            Кол-во колес: {$this->wheels} <br>
            Скорость:{$this->speed} <br>
            Марка:{$this->brand} <br> 
            Год выпуска:{$this->year}";
    }
}

