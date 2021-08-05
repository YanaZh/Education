<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Order.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Basket.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Product.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/User.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/Classes/Notification.php');

$product1 = new Product("хлеб", 25);
$product2 = new Product("колбаса", 225);
$product3 = new Product("майонез", 65);

$basket1 = new Basket;
$basket1->addProduct($product1, 2);
$basket1->addProduct($product2, 4);
$basket1->addProduct($product3, 1);

$order1 = new Order($basket1);
$printDescribe = $order1->getBasket()->describe();

//echo "Стоимость заказа ", $order1->getPrice(), "р. ";

$client1 = new User("Николай Николаевич", "niknik@ya.ru", "M", 27, "88005553333");
$client1->notify("для вас создан заказ, на сумму: " . $order1->getPrice() . "р. Состав: " . $printDescribe);
