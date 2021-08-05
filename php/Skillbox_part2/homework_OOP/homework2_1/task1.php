<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Cat.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Dog.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Fish.php');

$firstCat = new Cat("Бася");
$secondCat = new Cat("Вася");
$thirdCat = new Cat("Мася");

$firstDog = new Dog("Рэкс");
$secondDog = new Dog("Пират");
$thirdDog = new Dog("Бетховен");
$fourthDog = new Dog("Рыжик");
$fifthDog = new Dog("Игорь");

$firstFish = new Fish("Ариэль");
