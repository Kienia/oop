<?php
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность (от 1 до 100 лет).
// Этот метод должен использовать метод setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).

class Human
{
    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    //Добавил метод checkAge
    private function checkAge($age)
    {
        if ($age >= 1 && $age <= 100) {
            return $age;
        }
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}