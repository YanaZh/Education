<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заголовок</title>
    <style type="text/css">.red {color: red;}</style>
</head>
<body>
<?php include 'dz2_4.php';?>

<h1 <?= $red ? "class = 'red'" : ""?>><?= $title ?></h1>

<div>Авторов на портале: <?= $autorsInPortal?></div>
<!-- Выведите все книги -->
<?php
foreach ($result3['books'] as $key => $value) {
	$author = $result3['authors'][$value['autorEmail']];
	echo sprintf("<p>Книга %s, ее написал %s год Рождения автора: %s (%s) </p>", $value['bookName'], $author['fio'], $author['year'], $value['autorEmail']);
}
?>
</body>
</html>
