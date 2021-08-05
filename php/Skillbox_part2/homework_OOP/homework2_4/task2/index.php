<?php

require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Item.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/EmptyItem.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Creator.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/data/objectArray.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Cat.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Chicken.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Cow.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Dog.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Horse.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task2/Classes/Human.php');

foreach ($objectArray as $animal) {
    $someAnimal = Creator::create($animal);
    $someAnimal->show();
}