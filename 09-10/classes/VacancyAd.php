<?php

class VacancyAd extends Ad
{
    private $location;

    public function __construct($name, $description, $salary, $phone, $location)
    {
        parent::__construct($name, $description, $salary, $phone);
        $this->location = $location;
    }

    public function getLocation()
    {
        return $this->location;
    }

    //Реализация абстрактного метода из родительского класса
    //Модификатор доступа должен быть такой же как у родительского класса, либо ниже
    //Кол-во передаваемых в метод параметров должно совпадать либо у доп. параметров должно быть значение по умолчанию
    public function addAd()
    {
        // Реализация может быть пустая
    }
}