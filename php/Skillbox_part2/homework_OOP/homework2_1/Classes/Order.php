<?php

class Order
{
    public $basket;

    function __construct($basket)
    {
        $this->basket = $basket;
    }

    public function getBasket()
    {
        return $this->basket;
    }

    public function getPrice()
    {
        return $this->basket->getPrice();
    }
}
