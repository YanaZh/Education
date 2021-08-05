<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/HungryCat.php');

$firstCat = new HungryCat("Бася", "серый", "кошачий корм");
$secondCat = new HungryCat("Мася", "полосатый", "рыба");

$firstCat->eat("кошачий корм");
$firstCat->eat("рыба");
$firstCat->eat("мяско");
$firstCat->eat("молоко");
$firstCat->eat("конфетки");

$secondCat->eat("кошачий корм");
$secondCat->eat("рыба");
$secondCat->eat("мяско");
$secondCat->eat("молоко");
$secondCat->eat("конфетки");
