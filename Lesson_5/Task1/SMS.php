<?php


class SMS extends Decorator
{

    public function sendMsg($message)
    {
        echo 'Уведомление по СМС: ' . $message;
        return $this->notificator->sendMsg($message);
    }
}