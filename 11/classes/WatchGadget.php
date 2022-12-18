<?php
class WatchGadget extends Gadget
{
    private $bracelet;

    public function __construct($name, $price, $bracelet) {

        parent::__construct($name, $price);

        $this->bracelet = $bracelet;
    }

    public function getBracelet()
    {
        return $this->bracelet;
    }
}