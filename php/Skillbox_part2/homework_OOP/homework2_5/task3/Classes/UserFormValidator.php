<?php


class UserFormValidator
{
    /**
     * @throws \Exception
     */
    public function validate($userInfo)
    {
        if ($userInfo['name'] === '' || $userInfo['email'] === '' || $userInfo['age'] === '') {
            throw new Exception("Заполните все поля формы");
        }
        if ($userInfo['age'] < 18) {
            throw new Exception("Вы слишком молоды");
        }
        if (!filter_var($userInfo['email'], FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Заполните правильно поле e-mail");
        }

        return true;
    }
}