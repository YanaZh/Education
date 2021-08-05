<?php

abstract class Animal
{
	abstract function move();
}

abstract class SeaCreature extends Animal
{
	
}

abstract class LandAnimal extends Animal
{
	
}

class Fish extends SeaCreature
{
	public function move()
	{
		echo "Рыба плавает" . PHP_EOL;
	}
}

class Tiger extends LandAnimal
{
	public function move()
	{
		echo "Тигр бегает" . PHP_EOL;
	}
}

class Bear extends LandAnimal
{
	public function move()
	{
		echo "Медведь ходит в развалочку" . PHP_EOL;
	}
	
}

class Moose extends LandAnimal
{
	public function move()
	{
		echo "Лось ходит и бегает" . PHP_EOL;
	}
}

class Snake extends LandAnimal
{
	public function move()
	{
		echo "Змея ползает" . PHP_EOL;
	}
}

class Chicken extends LandAnimal
{
	public function move()
	{
		echo "Курица бегает" . PHP_EOL;
	}
}

class Camel extends LandAnimal
{
	public function move()
	{
		echo "Верблюд ходит" . PHP_EOL;
	}
}

class Elephant extends LandAnimal
{
	public function move()
	{
		echo "Слон ходит" . PHP_EOL;
	}
}

class Dolphin extends SeaCreature
{
	public function move()
	{
		echo "Дельфин плавает" . PHP_EOL;
	}
}