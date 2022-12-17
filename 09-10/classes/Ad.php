<?php

//abstract - Ключевое слово указываещее, что класс абстрактный. От абстрактных классов нельзя создавать объекты
abstract class Ad
{
    //МОДИФИКАТОРЫ ДОСТУПА
    //public - Публичный доступен из любого участка кода
    //protected - Защищенный доступен только в самом классе и в классах наследниках. Недоступен в обьекте
    //private - Приватный доступен только в классе в котором обьявлен
    //Рекомендуется: public - для большинства методов, protected - для служебных , private - для всех свойств

    private $name, $description, $salary, $phone;

    protected function __construct($name, $description, $salary, $phone)
    {
        $this->name = $name;
        $this->description = $description;
        $this->salary = $salary;
        $this->phone = $phone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    //Абстрактный метод не должен содержать в себе тело метода, реализация должна быть в дочернем классе (ОБЯЗАТЕЛЬНО)
    //Абстрактные методы могут быть обьявлены только в абстрактных классах
    abstract protected function addAd();
}


