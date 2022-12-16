<?php

class Driver extends Employee
{
    private $experience, $category;

    public function __construct($experience)
    {
        $this->experience = $experience;
    }

    public function setCategory($category)
    {
        $this->category = $this->checkCategory($category);
    }

    public function checkCategory($category)
    {
        $category = mb_strtoupper($category);
        if ($category === 'A' || $category === 'B' || $category === 'C') {
            return $category;
        }
    }

    public function getExperience()
    {
        return $this->experience;
    }

    public function getCategory()
    {
        return $this->category;
    }

}