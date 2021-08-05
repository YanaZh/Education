<?php

class Forge
{
    public function burn($object)
    {
        $flame = $object->burn();
        echo $flame->render((string)$object) . PHP_EOL;
    }
}

class BlueFlame
{
    public function render($name)
    {
        return $name . " горит синим пламенем";
    }
}

class RedFlame
{
    public function render($name)
    {
        return $name . " горит красным пламенем";
    }
}

class Smoke
{
    public function render($name)
    {
        return $name . " лишь задымился";
    }
}

class Thing
{
    public function burn()
    {
        return new RedFlame();
    }

    public function __toString()
    {
        return "Thing";
    }
}

class Pastry extends Thing
{
    public function burn()
    {
        return new RedFlame();
    }

    public function __toString()
    {
        return 'Pastry';
    }
}

class Book extends Thing
{
    public function burn()
    {
        return new BlueFlame();
    }

    public function __toString()
    {
        return 'Book';
    }
}

class Snow extends Thing
{
    public function burn()
    {
        return new Smoke();
    }

    public function __toString()
    {
        return 'Snow';
    }
}

class Pen extends Thing
{
    public function burn()
    {
        return new RedFlame();
    }

    public function __toString()
    {
        return 'Pen';
    }
}

class Phone extends Thing
{
    public function burn()
    {
        return new BlueFlame();
    }

    public function __toString()
    {
        return 'Phone';
    }
}

$firstForge = new Forge();
$firstPastry = new Pastry();
$firstBook = new Book();
$snowball = new Snow();
$firstPen = new Pen();
$firstPhone = new Phone();

$firstForge->burn($firstPastry);
$firstForge->burn($firstBook);
$firstForge->burn($snowball);
$firstForge->burn($firstPen);
$firstForge->burn($firstPhone);

