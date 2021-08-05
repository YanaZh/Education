<pre>
<?php
//задание 1
$result1 = [
	'author' => [
 		'fio' => 'Ivanov Igor Andreevich',
 		'email' => 'ivanov@mail.ru',
 	],
 	'book' => [
 		'bookName' => 'The best book',
 		'autorEmail' => 'petrov@mail.ru',
 	]
];
print_r($result1);

//задание 2
$result2 = [
	'authors' => [
		[
			'fio' => 'Ivanov Igor Andreevich',
 			'email' => 'ivanov@mail.ru',
 		],
 		[
 			'fio' => 'Petrov Ivan Aleksandrovich',
 			'email' => 'petrov@mail.ru',
 		],
 		[
 			'fio' => 'Sidorov Anton Ivanovich',
 			'email' => 'sidorov@mail.ru',
 		],
	],
	'books' => [
		[
			'bookName' => 'The best book',
 			'autorEmail' => 'petrov@mail.ru',
 		],
 		[
			'bookName' => 'The best book 2',
 			'autorEmail' => 'sidorov@mail.ru',
 		],
 		[
			'bookName' => 'The best book 3',
 			'autorEmail' => 'ivanov@mail.ru',
 		],
	]
];
print_r($result2);


//задание 3
$result3 = [
	'authors' => [
		'ivanov@mail.ru' => [
				'fio' => 'Ivanov Igor Andreevich',
				'email' => 'ivanov@mail.ru',
 				'year' => 1950,
 			],
 		'petrov@mail.ru' => [
 				'fio' => 'Petrov Ivan Aleksandrovich',
 				'email' => 'petrov@mail.ru',
 				'year' => 1960,
 		],
 		'sidorov@mail.ru' => [
 				'fio' => 'Sidorov Anton Ivanovich',
 				'email' => 'sidorov@mail.ru',
 				'year' => 1970,
 			],
	],
	'books' => [
		[
			'bookName' => 'The best book',
 			'autorEmail' => 'petrov@mail.ru',
 		],
 		[
			'bookName' => 'The best book 2',
 			'autorEmail' => 'sidorov@mail.ru',
 		],
 		[
			'bookName' => 'The best book 3',
 			'autorEmail' => 'ivanov@mail.ru',
 		],
	]
];
foreach ($result3['books'] as $key => $value) {
	$author = $result3['authors'][$value['autorEmail']];
	echo sprintf("Книга %s, ее написал %s год Рождения автора: %s (%s) <br>", $value['bookName'], $author['fio'], $author['year'], $value['autorEmail']);
}
shuffle($result3['books']);
echo "После перемешивания получилось: <br>";
foreach ($result3['books'] as $key => $value) {
	$author = $result3['authors'][$value['autorEmail']];
	echo sprintf("Книга %s, ее написал %s год Рождения автора: %s (%s) <br>", $value['bookName'], $author['fio'], $author['year'], $value['autorEmail']);
}

?>
</pre>