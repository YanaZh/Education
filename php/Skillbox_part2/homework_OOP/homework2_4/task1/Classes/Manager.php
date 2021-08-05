<?php

class Manager
{
    public function place($item)
    {
        $className = get_class($item);
        if ($item instanceof \Paper) {
            echo '<pre>';
            print_r("Положил " . $className . " на стол");
            echo '</pre>';
        } elseif ($item instanceof \Instrument) {
            echo '<pre>';
            print_r("Убрал " . $className . " внутрь стола");
            echo '</pre>';
        } else {
            echo '<pre>';
            print_r("Выкинул " . $className . " в корзину");
            echo '</pre>';
        }
    }
}