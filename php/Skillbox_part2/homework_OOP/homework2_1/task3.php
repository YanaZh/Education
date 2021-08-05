<?php
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/fortask3.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/ToyFactory.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Toy.php');

$firstToyFactory = new ToyFactory;
$toys = [];
$n = rand(5, 20);

for ($i = 0; $i < $n; $i++) {
    $toys [] = $firstToyFactory->createToy($toysName[rand(0, 5)]);

}

foreach ($toys as $toy) {
    echo "<p> Название игрушки - ", $toy->name, ", цена - ", $toy->price, '</p>';
}
