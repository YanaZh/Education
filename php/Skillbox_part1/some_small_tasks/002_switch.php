<?php

// 1. Создайте переменную с названием код ошибки, положите в нее случайное значение от 1 до 3
// для каждого отдельного кода ошибки выведите сообщение:
// 1 - "Что-то пошло не так"
// 2 - "Что-то пошло так как надо, но мы этого не ждали"
// 3 - "Я в домике"

$codeErr=rand(1,3);
switch ($codeErr) {
	case '1':
		echo "Что-то пошло не так";
		break;
	case '2':
		echo "Что-то пошло так как надо, но мы этого не ждали";
		break;
	default:
		echo "Я в домике";
		break;
}
echo "<br>";
// 2. Четный не с нами. Создайте переменную myNumber - в которую поместите случайное значение от 0 до 10
// Если это число четное (2, 4, 6, 8, 10) - то выведите сообщение: "Четный. Ты не с нами!", если это нечетное или 0 - то выведите "Добро пожаловать!"
// Для решения задачи применяйте switch, даже если очень хочется решить с if

$myNumber=mt_rand(0,10);
switch ($myNumber) {
	case '2':
	case '4':
	case '6':
	case '8':
		echo "Четный. Ты не с нами!";		
		break;
	default:
		echo "Добро пожаловать!";
		break;
}
echo "<br>";
// 3. Создайте массив foods с продуктами питания: Яблоко, Клубника, Апельсин, Кабачок, Патиссон, Банан, Арбуз, Картошка, Лягушачие лапки
// Создайте переменную foodItem - случайное число от 0 до 8 (количество продуктов - 1)
// Определите к какому виду относится продукт из массива foods под индексов foodItem: "Ягода", "Фрукт", "Овощ", "Что-то не вегетарианское"
// Выведите сообщение: "Выбранный продукт {} - это {}", вместо {} подставьте соответственно название продукта и его вид
$foods = ['Яблоко','Клубника','Апельсин','Кабачок','Патиссон','Банан','Арбуз','Картошка','Лягушачие лапки'];
$foodItem=rand(0,8);
switch ($foodItem) {
	case '0':
	case '2':
	case '5':
		$type='Фрукт';
		break;
	case '1':
	case '6':
		$type='Ягода';
		break;
	case '3':
	case '4':
	case '7':
		$type='Овощ';
		break;
	case '8':
		$type='Что-то не вегетарианское';
		break;
}
echo "Выбранный продукт $foods[$foodItem] - это $type";
?>