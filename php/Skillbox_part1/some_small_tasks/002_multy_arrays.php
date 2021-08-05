<pre>
<?php
// Многомерные массивы

// 1. Создайте массив matrix целых чисел от 1 до 9 в виде матрицы 3х3
$matrix = [
	[1,2,3],
	[4,5,6],
	[7,8,9]
];
var_dump($matrix);
// 2. Выведите центральный элемент (на строке 2 в столбце 2) из этой матрицы
$matrixSecondLine = $matrix[1];
var_dump($matrixSecondLine[1]);
// 3. Выведите последний элемент в первой строке из этой матрицы
$matrixFirstLine = $matrix[0];
var_dump($matrixFirstLine[2]);
var_dump($matrix[0][2]);
// 4. Выведите сумму элементов из этой матрицы, расположенных ниже и левее диагонали 1 5 9
$matrixThirdLine = $matrix[2];
var_dump($matrixSecondLine[0]+$matrixThirdLine[0]+$matrixThirdLine[1]);
// 5. Создайте массив, users описывающий следующих пользователей
// - Никита, 29 лет, плотник
// - Вася, 13 лет, футболист
// - Николай Николаевич, 77 лет, профессиональный игрок в DotA
// Массив должен быть ассоциативным с полями: имя, возраст, профессия
$users = [
	[
		'NAME' => 'Nikita',
		'AGE' => 29,
		'WORK_AS' => 'Plotnik'
	],
	[
		'NAME' => 'Vasya',
		'AGE' => 13,
		'WORK_AS' => 'Footbolist'],
	[
		'NAME' => 'Nilolay Nikolaevich',
		'AGE' => 77,
		'WORK_AS' => 'DotA gamer']
];
var_dump($users);
// 6. Добавьте в массив users еще одного участника: Виталий, 30 лет, программист
$users[3] = [
		'NAME' => 'Vitalii',
		'AGE' => 30,
		'WORK_AS' => 'Programmer'
	];
var_dump($users);
// 7. Создайте массив, описывающий загадочного пользователя (mysteriousUser) - с тем же набором полей, что и в массиве users
// В качестве имени укажите ему имя 3-го пользователя из массива users
// В качестве возраста, выберите ему возраст первого пользователя из массива users
// А профессию укажите из 2-го пользователя
// и выведите его на экран
$mysteriousUser = [
		'NAME' => $users[2]['NAME'],
		'AGE' => $users[0]['AGE'],
		'WORK_AS' => $users[1]['WORK_AS']
];
var_dump($mysteriousUser);
?>
</pre>