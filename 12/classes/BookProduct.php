<?php

namespace classes;

class BookProduct extends Product
{
    private $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);

        $this->numPages = $numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }
}
