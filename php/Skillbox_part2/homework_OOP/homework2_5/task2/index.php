<?php
require($_SERVER['DOCUMENT_ROOT'] . '/homework2_5/task2/Classes/UserFormValidator.php');

$success = false;
if (!empty($_POST)) {
    try {
        $success = (new UserFormValidator())->validate($_POST);
        echo 'Валидация успешно пройдена';
        die();
    } catch (\Exception $e) {
        $error = $e->getMessage();
        echo $error;
    }
}
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