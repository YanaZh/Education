<?php
//Задание 5
$city1 = mt_rand(0, 1000);
$city1Radius = mt_rand(1, 100);
$city2 = mt_rand(0, 1000);
$city2Radius = mt_rand(1, 100);
$carCount = 10;
$cars = [];

for ($i = 0; $i < $carCount; $i++) { 
	$cars[] = mt_rand(0,1000);
}

for ($i = 0; $i < $carCount; $i++) { 
	if (($cars[$i] >= $city1 - $city1Radius) &&  ($cars[$i] <= $city1 + $city1Radius) || ($cars[$i] > $city2 - $city2Radius) &&  ($cars[$i] <= $city2 + $city2Radius) ) {
		echo sprintf("Машина %s едет по городу на %s км со скоростью не более 70 <br>", $i + 1, $cars[$i]);
	} else {
		echo sprintf("Машина %s едет по городу на %s км со скоростью не более 90 <br>", $i + 1, $cars[$i]);
	}
}