<?php

class Product
{
    public $name;
    public $price;

    public $cpu;
    public $numPages;

    public function __construct($name, $price, $cpu = null, $numPages = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->numPages = $numPages;
    }

    //Методы которые начинаются с get называются геттерами они всегда что-то возвращают
    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    //Костыльная реализация метода возвращаемого информацию о продукте
    //На каждый тип товара нужно писать проверку
    public function getProduct($type = 'notebook')
    {
        $out = "<hr><b>О товаре</b>
                Наименование: {$this->name} <br>
                Цена: {$this->price} <br>";
        if($type === 'notebook') {
            $out .= "Процессор: {$this->cpu} <br>";
        } else {
            $out .= "Кол-во страниц: {$this->numPages} <br>";
        }
        return $out;
    }
}


//Быстрое добавление геттеров и сетеров в phpStorm alt + enter

