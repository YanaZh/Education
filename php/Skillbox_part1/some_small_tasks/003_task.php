<pre>
<?php

// Задание 3 - Поиск min элемента в массиве
// Создайте массив values содержащий 10 случайных чисел от 0 до 100, найдите в этом массиве минимальное значение.
// Выведите сам массив, минимальное значение и его позицию в массиве, если таких значений несколько, то выведите первое из них.

$values=[];
for ($i=0; $i <10; $i++) 
{ 
	$values[$i]=mt_rand(0,100);
}
$minInArr=$values[0];
$minIndex=0;
for ($i=1; $i < count($values); $i++) 
{ 
	if ($values[$i]<$minInArr) 
	{
		$minInArr=$values[$i];
		$minIndex=$i;
	}
}
var_dump($values);
var_dump($minInArr);
var_dump($minIndex);
?>
</pre>