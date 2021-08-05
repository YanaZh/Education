<?php

// Задание 2 - Перестановка букв в слове (циклический сдвиг влево)
// Дано слово (поместите любой текст в переменную word), нужно взять первую букву в слове и поставить ее в конец.
$word = 'love';
$arr=str_split($word);
$firstLetter=$arr[0];
for ($i=1; $i < count($arr); $i++) 
{ 
	$arr[$i-1]=$arr[$i];
}
$arr[count($arr)-1]=$firstLetter;
var_dump($arr);
?>