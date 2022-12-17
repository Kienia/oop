<?php

//Реализация интерфейса
//implements - ключевое слово добавление интерфейса
class ResumeAd extends Ad implements Iuser
{
    private $email;

    public function __construct($name, $description, $salary, $phone, $email)
    {
        parent::__construct($name, $description, $salary, $phone);

        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    //Реализация абстрактного метода из родительского класса
    public function addAd()
    {
        //Может быть пустым
    }

    //Реализуем метод интерфейса
    public function test()
    {
     return self::TEST2;
    }
}