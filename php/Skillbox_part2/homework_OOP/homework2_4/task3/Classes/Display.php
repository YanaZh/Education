<?php

class Display
{
    public static function show($formatter, $string)
    {
        if ($formatter instanceof Renderable) {
            return $formatter->render($string);
        } elseif ($formatter instanceof Formatter || method_exists($formatter, 'format')) {
            return $formatter->format($string);
        } else {
            return $string;
        }
    }
}