<pre>
<?php
// Массивы

// 1. Создайте массив numbers с тремя значениями - любыми целыми числами
$numbers = [1,2,3];
var_dump($numbers);
// 2. Создайте массив lines с тремя значениями - любыми словами
$lines = ["я", "массив", "из трех значений!"];
var_dump($lines);
// 3. Создайте массив one c одним значением равным 8, ключом этого значения сделайте число 34
$one = [34 => 8];
var_dump($one);
// 4. Даны следующие слова и описание к ним: мышь - это животное грызун, конь - скачет по полям, хрюшка - кушает желуди
// создайте массив словарь dictionary, содержащий три элемента. ключом элементам массива сделайте - имя животного, а значением - его описание
$dictionary = [
	"MOUSE" => "это животное грызун",
	"HORSE" => "скачет по полям",
	"PIG" => "кушает желуди"
];
// 5. Не очень хорошо, когда ключи массива содержат символы, не относящиеся к английскому языку
// переименуйте ключи в массиве dictionary, укажите вместо них английские названия животных

// 6. Выведите массив $dictionary, известной вам функцией
var_dump($dictionary);
// 7. А теперь выведите отдельно описание мышки из массива dictionary
var_dump($dictionary[MOUSE]);
// 8. А выведите описание хрюшки из массива dictionary
var_dump($dictionary[PIG]);
// 9. А выведите третий элемент из массива numbers
var_dump($numbers[2]);
// 10. Мне не нравится это число, давайте в третий элемент массива numbers поместим число 3.14
// И выведите этот элемент, чтобы убедиться, что там именно наше новое число
$numbers[2] = 3.14;
var_dump($numbers[2]);
// 11. Создайте массив days, состоящий из дней недели, сделайте ключи этого массива равными номеру дня в неделе от 1 до 7,
// а значениями - строку с названием дня, 1 - Понедельник, 2 - Вторник и т.д.
$days =[
	1 => "Monday",
	2 => "Tuesday",
	3 => "Wednesday",
	4 => "Thursday",
	5 => "Friday",
	6 => "Saturday",
	7 => "Sunday"
];
var_dump($days);
?>
</pre>