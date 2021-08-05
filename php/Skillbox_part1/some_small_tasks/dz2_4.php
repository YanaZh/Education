<?php
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
$title = "Это заголовок страницы";
$red = (bool) rand(0, 1);
$autorsInPortal = count($result3['authors']);
