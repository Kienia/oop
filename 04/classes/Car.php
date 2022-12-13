<?php


class Car
{
    public $color;
    public $wheels;
    public $speed;
    public $brand;
    public $year;

    //Магический метод __сonstruct - вызывается всегда (автоматически) при создании обьекта
    //Значения можно присваивать по умолчанию как у обычной функции
    //В старых версиях PHP (PHP 4) что бы обьявить __construct, нужно создать функцию с названием класса (!УСТАРЕЛО!)
    //Методы не называть по имени класса. т.к. если будет отсутствовать __construct, такой метод будет расценен как __construct (РЕКОМЕНДАЦИЯ!)
    public function __construct($color, $wheels = 4, $speed = 180, $brand, $year)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
        $this->year = $year;
    }


    //Вопрос с собеса про разрыв тела класса. Да можем разрывать тело класса и например писать в разрыве HTML (ОЧЕНЬ РЕДКО ИСПОЛЬЗУЕТСЯ!)
    public function getLorem()
    { ?>
        <div>Тут HTML</div>
    <?php
    }

    public function getCarInfo()
    {
        return "<h2>Информация по авто</h2>
            Цвет: {$this -> color} <br>
            Кол-во колес: {$this->wheels} <br>
            Скорость:{$this->speed} <br>
            Марка:{$this->brand} <br>
            Год выпуска:{$this->year}";
    }

    //Магический метод __destruct срабатывает при уничтажении обьекта (Когда освобождаются все ссылки на определенный обьект(т.е. обьект удаляется из память))
    //Порядок удаления обьектов не определен соответственно особого смысла использовать __destruct зачастую нет (РЕДКО ИСПОЛЬЗУЕТСЯ)
    //Можно использовать для закрытия соеденение с БД, хотя PHP это и так делает это сам.
    public function __destruct()
    {

    }
}


//Константа __METHOD__ выводит информацию о методе класса. Пример echo(__METHOD__)