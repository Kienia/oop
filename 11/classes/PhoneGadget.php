<?php

class PhoneGadget extends Gadget implements Igadget
{
    private $simCards;

    public function __construct($name, $price, $simCards)
    {
        parent::__construct($name, $price);

        $this->simCards = $simCards;
    }

    public function case()
    {
        // TODO: Implement case() method.
    }

    public function getSimCards()
    {
        return $this->simCards;
    }
}
