<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/User.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Notification.php');

$firstUser = new User("Игорь", "igor@ya.ru", "M", 7, "88005553333");
$secondUser = new User("Олег", "oleg@ya.ru", "M", 78, "88005553333");
$thirdUser = new User("Андрей", "andrey@ya.ru", "", "", "");
$fourthUser = new User("Иван", "ivan@ya.ru", "", 18, "");

$firstUser->notify("Вот это задница");
$secondUser->notify("Вот это задница");
$thirdUser->notify("Вот это задница");
$fourthUser->notify("Вот это задница");
