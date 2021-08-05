<?php

class User
{
    public $FIO;
    public $email;
    public $gender;
    public $age;
    public $phone;

    public function __construct($name, $email, $gender = '', $age = null, $phone = '')
    {
        $this->FIO = $name;
        $this->email = $email;
        $this->gender = $gender;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function notifyOnEmail($message)
    {
        $objNotification = new Notification($this->FIO, 'e-mail', $this->email);
        $objNotification->send($message);
    }

    public function notifyOnPhone($message)
    {
        $objNotification = new Notification($this->FIO, 'phone', $this->phone);
        $objNotification->send($message);
    }

    public function notify($message)
    {
        if ($this->age < 18 || $this->age === null) {
            $message = $this->censor($message);
        }
        $this->notifyOnEmail($message);
        if ($this->phone !== '') {
            $this->notifyOnPhone($message);
        }

    }

    public function censor($message)
    {
        require($_SERVER['DOCUMENT_ROOT'] . '/homework2_1/fortask4.php');

        return str_replace($badWords, '...', $message);
    }
}
