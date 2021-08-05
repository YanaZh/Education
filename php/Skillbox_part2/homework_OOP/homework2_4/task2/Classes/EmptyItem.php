<?php

class EmptyItem extends Item
{
    public function show()
    {
        echo '<pre>';
        print_r('Класс ' . $this->name . ' не найден');
        echo '</pre>';

    }
}