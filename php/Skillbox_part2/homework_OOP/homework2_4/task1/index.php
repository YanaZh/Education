<?php

require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Instrument.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Paper.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Apple.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Document.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Knife.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/NoteBook.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Pen.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_4/task1/Classes/Manager.php');

$manager = new Manager();
$manager->place(new Document());
$manager->place(new NoteBook());
$manager->place(new Knife());
$manager->place(new Apple());
$manager->place(new Pen());
