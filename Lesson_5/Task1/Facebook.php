<?php


class Facebook extends Decorator
{

    public function sendMsg($message)
    {
        echo "Уведомление Фейсбук: " . $message;
        return $this->notificator->sendMsg($message);
    }
}