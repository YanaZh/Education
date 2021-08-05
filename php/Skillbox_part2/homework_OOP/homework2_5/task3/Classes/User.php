<?php


class User
{
    public static function load($id)
    {
        if ($id > 5) {
            throw new Exception("Пользователь не найден" . PHP_EOL);
        }
    }

    public static function save($data)
    {
        if ((bool)random_int(0, 1)) {
            throw new Exception("Данные не удалось сохранить в БД" . PHP_EOL);
        }
    }
}