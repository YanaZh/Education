<?php

require($_SERVER['DOCUMENT_ROOT'] . '/homework2_5/task1/Classes/Calculator.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_5/task1/Classes/Multiplication.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_5/task1/Classes/Division.php');

function add($number1, $number2)
{
    return ($number1 + $number2) . PHP_EOL;
}

$callbacks = [];
$numbers = [
    [5, 10],
    [12, 13],
    [-1, 3],
];
$callbacks[] = 'add';

$callbacks[] = function ($number1, $number2) {
    return ($number1 - $number2) . PHP_EOL;
};

$callbacks[] = [Multiplication::class, 'multiply'];

$ob = new Division();
$callbacks[] = [$ob, 'divide'];


foreach ($numbers as $number) {
    echo '<pre>';
    echo $number[0] . ', ' . $number[1] . PHP_EOL;
    foreach ($callbacks as $callback) {
        Calculator::calculate($number[0], $number[1], $callback);
    }
    echo '</pre>';
}

