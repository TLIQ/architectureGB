<?php


class Decorator implements Notification
{
    protected $notificator;
    public function __construct(Notification $notificator)
    {
        $this->notificator = $notificator;
    }
}