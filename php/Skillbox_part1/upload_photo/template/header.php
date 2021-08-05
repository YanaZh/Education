<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/upload_photo/data/main_menu.php'); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/upload_photo/include/helper.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Отправка файла на сервер</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
</head>

<body>
<h1>Загрузка файлов на сервер</h1>
<div>
    <?php helper\showMenu($mainMenu, "sortAsc"); ?>
</div>
