<?php

class Creator
{
    static function create($name)
    {
        if (class_exists($name) && $name instanceof \Item) {
            return new $name($name);
        } else {
            return new EmptyItem($name);
        }
    }
}