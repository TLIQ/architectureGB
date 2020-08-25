<?php


abstract class Billing
{
    protected $account;
    protected abstract function accept($phone):void;
    protected abstract function reject($phone):void;

    public function __construct($account)
    {
        $this->account = $account;
    }

    public function bill($price, $phone): bool
    {
        if ($this->account >= $price)
        {
            $this->account -= $price;
            $this->accept($phone);
            return true;
        } else {
            $this->reject($phone);
            return false;
        }
    }
}