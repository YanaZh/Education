<?php

class Basket
{
    public $products = [];

    public function addProduct(Product $product, $quantity)
    {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
    }

    public function getPrice()
    {
        $sum = 0;
        foreach ($this->products as $value) {
            $sum += $value['product']->getPrice() * $value['quantity'];
        }
        return $sum;
    }

    public function describe()
    {
        $result = '';
        foreach ($this->products as $value) {
            $result .= "<p>" . $value['product']->getName() . ' - ' . $value['product']->getPrice() . 'р. - ' . $value['quantity'] . "шт.</p>";
        }
        return $result;
    }
}
