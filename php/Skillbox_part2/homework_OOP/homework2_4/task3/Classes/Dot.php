<?php

class Dot implements Formatter
{

    public function format($string)
    {
        return str_replace(" ", ".", $string); //меняет пробелы на точки
    }
}