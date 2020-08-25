<?php


class Kiwi extends Billing
{
    public function __construct($account)
    {
        parent::__construct($account);
    }

    protected function accept($phone): void
    {
        echo "KIWI, платеж по номеру $phone прошел, на балансе: $this->account" . PHP_EOL;
    }

    protected function reject($phone): void
    {
        echo "KIWI, платеж по номеру $phone отклонен, на балансе: $this->account" . PHP_EOL;
    }
}