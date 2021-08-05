<?php

class Animal
{
    public function say()
    {
        echo 'это животное молчит' . '<br>';
    }

    public function walk()
    {
        echo 'это животное не ходит' . '<br>';
    }
}

class HoofAnimal extends Animal
{
    public function walk()
    {
        echo 'топ-топ' . '<br>';
    }
}

class Bird extends Animal
{
    public function tryToFly()
    {
        echo "Вжих-вжих-топ-топ" . '<br>';
    }

    public function walk()
    {
        $this->tryToFly();
    }
}

class Farm
{
    protected $animals = [];

    public function addAnimal(Animal $animal)
    {
        $this->animals[] = $animal;
        $animal->walk();
    }


    public function getAnimals()
    {
        return $this->animals;
    }

    public function rollCall()
    {
        shuffle($this->animals);
        foreach ($this->animals as $animal) {
            $animal->say();
        }
    }
}

class Cow extends HoofAnimal
{
    public function say()
    {
        echo 'муууууу' . '<br>';
    }
}

class Pig extends HoofAnimal
{
    public function say()
    {
        echo 'хрю-хрю' . '<br>';
    }
}

class Chicken extends Bird
{
    public function say()
    {
        echo 'ко-ко-ко' . '<br>';
    }
}

class Goose extends Bird
{
    public function say()
    {
        echo 'га-га-га' . '<br>';
    }
}

class Turkey extends Bird
{
    public function say()
    {
        echo 'курлык-курлык' . '<br>';
    }
}

class Horse extends HoofAnimal
{
    public function say()
    {
        echo 'иго-го' . '<br>';
    }
}

class BirdFarm extends Farm
{
    public function showAnimalsCount()
    {
        echo "Птиц на ферме: " . count($this->animals) . '<br>';
    }

    public function addAnimal(Animal $animal)
    {
        parent::addAnimal($animal);
        $this->showAnimalsCount();
    }
}

class Farmer
{
    public function addAnimal(Farm $farm, Animal $animal)
    {
        $farm->addAnimal($animal);
    }

    public function rollCall(Farm $farm)
    {
        $farm->rollCall();
    }
}

$firstCow = new Cow();
$firstPig = new Pig();
$secondPig = new Pig();
$firstChicken = new Chicken();
$firstTurkey = new Turkey();
$secondTurkey = new Turkey();
$thirdTurkey = new Turkey();
$firstHorse = new Horse();
$secondHorse = new Horse();
$firstGoose = new Goose();

$hoofFarm = new Farm();
$birdsFarm = new BirdFarm();
$lazyFarmer = new Farmer();

$lazyFarmer->addAnimal($hoofFarm, $firstCow);
$lazyFarmer->addAnimal($birdsFarm, $firstChicken);
$lazyFarmer->addAnimal($hoofFarm, $firstPig);
$lazyFarmer->addAnimal($hoofFarm, $secondPig);
$lazyFarmer->addAnimal($birdsFarm, $firstTurkey);
$lazyFarmer->addAnimal($birdsFarm, $secondTurkey);
$lazyFarmer->addAnimal($birdsFarm, $thirdTurkey);
$lazyFarmer->addAnimal($hoofFarm, $firstHorse);
$lazyFarmer->addAnimal($hoofFarm, $secondHorse);
$lazyFarmer->addAnimal($birdsFarm, $firstGoose);
$lazyFarmer->rollCall($birdsFarm);
