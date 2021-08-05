<?php

class  Notification
{
    public $receiver;
    public $via;
    public $to;

    public function __construct($receiver, $via, $to)
    {
        $this->receiver = $receiver;
        $this->via = $via;
        $this->to = $to;
    }

    public function send($message)
    {
        echo "<p> Уведомление клиенту: ", $this->receiver, " на ", $this->via, "(", $this->to, "): ", $message, '</p>';
    }
}
