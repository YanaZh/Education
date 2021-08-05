<?php
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_5/task3/Classes/UserFormValidator.php');
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_5/task3/Classes/User.php');
echo '<pre>';


$success = false;
if (!empty($_POST)) {
    try {
        User::load($_POST['id']);
    } catch (\Exception $e) {
        $error = $e->getMessage();
        echo $error;
    } finally {
        try {
            $success = (new UserFormValidator())->validate($_POST);
            echo 'Валидация успешно пройдена' . PHP_EOL;

            if (isset($e)) {
                User::save($_POST);
                echo "Данные успешно сохранены в БД" . PHP_EOL;
            }
            die();
        } catch (\Exception $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }
}
echo '</pre>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="#" method="post">
    <div>
        <label>Ваш ID: <input type="text" name="id"
                              value="<?= isset($_POST['id']) ? $_POST['id'] : '' ?>"></label>
        <label>Ваше имя: <input type="text" name="name"
                                value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>"></label>
        <label>Ваш возраст: <input type="text" name="age"
                                   value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>"></label>
        <label>Ваш email: <input type="text" name="email"
                                 value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>"></label>
        <input type="submit" name="send" value="Отправить">
    </div>

</form>

</body>
</html>