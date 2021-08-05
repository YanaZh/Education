<?php

abstract class Item
{
    protected  $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo '<pre>';
        print_r('Я ' . $this->name);
        echo '</pre>';
    }
}