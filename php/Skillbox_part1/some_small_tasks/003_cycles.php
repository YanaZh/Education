<?php

// 1. Выведите числа от 0 до 9
for ($i=0; $i < 10; $i++) 
{ 
	echo "$i  ";
}
echo "<br>";

// 2. Выведите 10 случайных числе от 1 до 10

for ($i=0; $i < 10; $i++) 
{ 
	$a=rand(1,10);
	echo "$a  ";
}
echo "<br>";
// 3. Создайте массив items из 10 случайных целых значений от 0 до 9
for ($i=0; $i < 10; $i++) 
{ 
	$items[$i]=rand(1,9);
	echo "$items[$i]  ";
}
echo "<br>";
// 4. Добавляйте случайные целые числа от 1 до 9 в массив numbers до тех пор, пока сумма всех элементов этого массива меньше 100
// А затем выведите сколько числе всего в массиве: "Длинна массива numbers = {}"
$numbers=[];
$s=0;
$i=0;
while ( $s< 100) 
{
	$numbers[$i]=rand(1,9);
	$s+=$numbers[$i];
	$i++;
}
echo "$i";
echo "<br>";
// 5. Переберите массив $numbers, созданный ранее, и посчитайте сумму всех четных чисел в нем
// Выведите следующие строки (как всегда вместо {} подставив нужные значения):
// Общая сумма массива numbers = {}
// Из нее часть, которая приходится на четные числа = {}
// И часть из нечетных чисел = {}
$sEven=0;
for ($j=0; $j < $i ; $j++) 
{ 
	if ($numbers[$j]%2===0) 
	{
		$sEven+=$numbers[$j];
	}
}
$sOdd=$s-$sEven;
echo "Общая сумма массива numbers = $s <br>Из нее часть, которая приходится на четные числа = $sEven<br>И часть из нечетных чисел = $sOdd";

?>