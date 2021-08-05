<?php

class Italic implements Renderable
{

    public function render($string)
    {
        return "<em>" . $string . "</em>";
    }
}