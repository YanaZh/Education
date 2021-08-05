<?php

class Cat
{
    public $name;
    public $color;
    public $age;

    function __construct($name, $color, $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }

    public function getInfo()
    {
        return "Этого кота зовут: " . $this->name . ". Цвет кота: " . $this->color . ". Возраст: " . $this->age . PHP_EOL;
    }
}

class CatFactory
{
    public static function createBlack8YearsOldCat($name)
    {
        return new Cat($name, "black", 8);
    }

    public static function createBlackCat($name, $age)
    {
        return new Cat($name, "black", $age);
    }

    public static function createWhite10YearsOldCat($name)
    {
        return new Cat($name, "white", 10);
    }

    public static function createWhiteCat($name, $age)
    {
        return new Cat($name, "white", $age);
    }

    public static function create1YearsOldCat($name, $color)
    {
        return new Cat($name, $color, 1);
    }

    public static function createStriped2YearsOldCat($name)
    {
        return new Cat($name, "striped", 2);
    }

    public static function createGray5YearsOldCat($name)
    {
        return new Cat($name, "gray", 5);
    }
}

$cats = [];
$cats[0] = CatFactory::createBlack8YearsOldCat("Бася");
$cats[1] = CatFactory::createBlackCat("Вася", 7);
$cats[2] = CatFactory::createWhite10YearsOldCat("Гася");
$cats[3] = CatFactory::createWhiteCat("Дася", 5);
$cats[4] = CatFactory::create1YearsOldCat("Жася", "red");
$cats[5] = CatFactory::createStriped2YearsOldCat("Кася");
$cats[6] = CatFactory::createGray5YearsOldCat("Мася");
foreach ($cats as $cat) {
    echo $cat->getInfo();
    echo "<br>";
}