<?php

namespace classes;

use interfaces\ICase;

class NotebookProduct extends Product implements ICase
{
    private $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);

        $this->cpu = $cpu;
    }

    public function getCpu()
    {
        return $this->cpu;
    }
    public function showCase()
    {
        return 'Незабудьте про чехол';
    }
}
