<?php

require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task3/Classes/Formatter.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task3/Classes/Renderable.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task3/Classes/Display.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task3/Classes/Dot.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task3/Classes/Italic.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task3/data/stringsArray.php');

$classes = [
    new Dot(),
    new Italic(),
];

foreach ($classes as $class) {
    foreach ($stringsArray as $string) {
        echo '<pre>';
        print_r(Display::show($class, $string));
        echo '</pre>';
    }
}